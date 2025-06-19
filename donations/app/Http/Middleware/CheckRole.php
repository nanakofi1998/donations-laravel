<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        try {
            // First check JWT token if present
            if ($request->bearerToken()) {
                $user = JWTAuth::parseToken()->authenticate();
            } else {
                // Else, fallback to session-based authentication
                $user = Auth::user();
            }

            if (!$user) {
                // If neither found, redirect to login
                if ($request->expectsJson()) {
                    return response()->json(['message' => 'Unauthorized'], 401);
                }
                return redirect()->route('login')->with('error', 'Please login first');
            }

            $userRole = $user->roles()->first();

            if (!$userRole || !in_array($userRole->slug, $roles)) {
                if ($request->expectsJson()) {
                    return response()->json(['message' => 'Forbidden: Access Denied'], 403);
                }
                return redirect()->route('login')->with('error', 'Access Denied');
            }

            return $next($request);
        } catch (\Exception $e) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthorized: ' . $e->getMessage()], 401);
            }
            return redirect()->route('login')->with('error', 'Unauthorized access');
        }
    }
}
