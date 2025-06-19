<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmailOtp ;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'f_name'        => 'required|string|max:255',
            'l_name'        => 'required|string|max:255',
            'password'      => 'required|string|min:8|confirmed',
            'email'         => 'required|string|email|max:255|unique:users',
            'phone'         => 'nullable|string|max:15',
            'account_type'  => 'required|in:individual,institution',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // DB Transaction begins
        DB::beginTransaction();

        try {
            $user = User::create([
                'f_name'        => $request->f_name,
                'l_name'        => $request->l_name,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'account_type'  => $request->account_type,
                'userkey'       => (string) Str::uuid(),
                'userslug'      => Str::slug($request->f_name . ' ' . $request->l_name . '-' . Str::random(6)),
                'is_verified'   => false,
                'status'        => 'active',
                'password'      => Hash::make($request->password),
            ]);

            // Determine default role based on account type
            $roleSlug = $request->account_type === 'institution' ? 'i_admin' : 'fundraiser';

            $role = Role::where('slug', $roleSlug)->first();

            if (!$role) {
                // If no matching role exists, rollback and throw
                DB::rollBack();
                return redirect()->back()->with('error', 'Role not found for account type');
            }

            // Attach role to user
            $user->roles()->attach($role->id);

            // Generate OTP for email verification
            $otp = random_int(100000, 999999);
            $hashed = Hash::make($otp);
            $expiry = config('auth.otp_expiry_minutes');

            DB::table('email_verifications')->where('user_id', $user->id)->delete(); // Clear any existing OTPs

            DB::table('email_verifications')->insert([
                'user_id' => $user->id,
                'otp'     => $hashed,
                'expiry'  => now()->addMinutes($expiry),
                'created_at' => now(),
            ]);

            //Send email otp email
            Mail::to($user->email)->queue(new VerifyEmailOtp($otp));

            \Log::info("OTP sent to {$user->email}");

            // Commit transaction
            DB::commit();

            return redirect()->route('otp')->with(['success' => 'Registration successful!', 'email' => $user->email]);
        } 
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Registration failed' . $e->getMessage());
        }

    }

    // Send OTP to user's email for verification
    public function verifyOtp(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|exists:users,email',
        'otp'   => 'required|digits:6',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $user = User::where('email', $request->email)->first();

    $record = DB::table('email_verifications')
                ->where('user_id', $user->id)
                ->first();

    if (!$record) {
        return redirect()->back()->with('error', 'OTP not found, please request new code');
    }

    if (Carbon::parse($record->expiry)->isPast()) {
        DB::table('email_verifications')->where('id', $record->id)->delete();

        return redirect()->back()->with('error', 'OTP expired, please request new code');
    }

    if (!Hash::check($request->otp, $record->otp)) {
        return redirect()->back()->with('error', 'OTP invalid, please request new code');
    }

    // Mark user verified
    $user->update(['is_verified' => true]);

    // Delete OTP record
    DB::table('email_verifications')->where('id', $record->id)->delete();

    $token = JWTAuth::fromUser($user);

    \Log::info("User {$user->email} successfully verified via OTP.");

    
     session(['jwt_token' => $token]);

    return redirect()->route('login')->with('success', 'Email verified! Login');
    }

    // Resend OTP to user's email
    public function resendOtp(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'email' => 'required|string|email|exists:users,email',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error_code' => 'OTP_RESEND_001',
            'message'    => 'Validation failed',
            'errors'     => $validator->errors(),
        ], 422);
    }

    $user = User::where('email', $request->email)->first();

    if ($user->is_verified) {
        return response()->json([
            'error_code' => 'OTP_RESEND_002',
            'message'    => 'Email is already verified.',
        ], 400);
    }

    $otp = random_int(100000, 999999);
    $hashedOtp = Hash::make($otp);
    $expiryMinutes = config('auth.otp_expiry_minutes');

    // Delete any old OTP
    DB::table('email_verifications')->where('user_id', $user->id)->delete();

    // Store new OTP
    DB::table('email_verifications')->insert([
        'user_id'    => $user->id,
        'otp'        => $hashedOtp,
        'expiry' => Carbon::now()->addMinutes($expiryMinutes),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Send OTP Email (Queued)
    Mail::to($user->email)->queue(new VerifyEmailOtp($otp));

    \Log::info("New OTP sent to {$user->email}");

    return response()->json([
        'success' => true,
        'message' => 'A new OTP has been sent to your email.',
    ], 200);
    }

    public function signupView()    
    {
        return view('auth.signup');
    }

    public function otpView()
    {
        return view('auth.verifyotp');
    }

    public function login( Request $request)
    {
       $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
       ]);

       if ($validator->fails()) {
         return back()->withErrors($validator)->withInput();
       }

       $credentials = $request->only('email','password');

       if (!Auth::attempt($credentials)) {
        return back()->with('error', 'Invalid email or password')->withInput();
       }

       $user = auth()->user();

       if (!$user->is_verified) {
        Auth::logout();
        return back()->with('error', 'Email not verified. Please verify your email before logging in');
       }

       $role = $user->roles()->first();

       if (!$role) {
        Auth::logout();
        return back()->with('error', 'User has no specific role');
       }

       \Log::info("{$user->email} logged in as {$role->slug}");

       $token = JWTAuth::fromUser($user);
       session(['jwt_token' => $token]);

       switch ($role->slug) {
        case 'i_admin' :
            return redirect()->route('admin.dashboard')->with('token', $token)->with('success', 'Welcome Admin');
        case 'fundraiser' :
            return redirect()->route('dashboard', ['token' => $token]);
       }
    }

    public function logout(Request $request)
    {
        try {
            if (JWTAuth::getToken()) {

                JWTAuth::invalidate(JWTAuth::getToken());
            }

            session()->forget('jwt_token');
            session()->flush();

            Auth::logout();
            \Log::info('User logged out successfully');

            return redirect()->route('login')->with('success', 'Logged out successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Logout failed: ' . $e->getMessage());
        }
    }
}
