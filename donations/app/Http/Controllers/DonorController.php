<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonorRequest;
use Illuminate\Validation\Rule;
use App\Models\Donor;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        // Fetch all donors to display in the view
        $donors = Donor::with('campaigns')->get();
        $donors = Donor::with('campaigns')->paginate(10);
        // Fetch all campaigns to display in the dropdown
        $campaigns = Campaign::all();
        // CSV export 
        if ($request -> has('export') && $request->export === 'csv') {
            $filename = 'donor_export_'.now()->format('Ymd_His').'.csv';
            $headers = ['Content-Type' => 'text/csv'];
    
            $callback = function () use($donors) {
                $file = fopen('php://output', 'w');
                fputcsv($file, ['First Name', 'Last Name', 'Phone', 'Email', 'Preference', 'Campaigns']);

            foreach ($donors as $donor) {
                fputcsv($file, [
                    $donor -> f_name,
                    $donor->l_name,
                    $donor->donor_phone,
                    $donor->email,
                    $donor->donation_preference,
                    $donor->campaigns->pluck('campaign_name')->join(', '),
                ]);
            };
    
            fclose($file);
            };
            return Response::stream($callback, 200, array_merge($headers, [
                'Content-Disposition' => "attachment; filename=\"$filename\"",
            ]));
        };
        // Pass the donors to the view
        return view('admin.manage_donors', compact('donors', 'campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
         // Fetch all campaigns to display in the dropdown
         $campaigns = Campaign::all();
         // Pass the campaigns to the view
         return view('admin.add_donors_create', compact('campaigns'));  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDonorRequest $request)
    {
       DB::beginTransaction();
       
       try {
            $validated = $request->validated();
            $donor = new Donor();

            $donor->donor_type = $validated['donor_type'];
            $donor->f_name = $validated['f_name']   ?? null;
            $donor->l_name = $validated['l_name']   ?? null;
            $donor->institution_name = $validated['institution_name'] ?? null;
            $donor->institution_address = $validated['institution_address'] ?? null;
            $donor->email = $validated['email'];
            $donor->donor_amount = $validated['donor_amount'];
            $donor->donation_preference = $validated['donation_preference'];
            $donor->donor_phone = $validated['donor_phone'] ?? null;
            $donor->anonymous = $validated['anonymous'] ?? false;
            $donor->donor_message = $validated['donor_message'] ?? null;
            $donor->campaign_id = $validated['campaign_id'] ?? null;

            $donor->save();

            DB::commit();
            return redirect()->back()->withInput([])->with('success', 'Donor added successfully!');
        } 
        catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error adding donor: ' . $e->getMessage());
            return redirect()->back()->withInput([])->with('error', 'Failed to add donor. Please try again.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $donors = Donor::findOrFail($id);
        // $validated = $request->validate([
        //     'f_name' => 'required|string|max:255',
        //     'l_name' => 'required|string|max:255',
        //     'email' => 'required|email|unique:donors,email,' . $id,
        //     'institution_name' => 'nullable|string|max:255',
        //     'donation_preference' => 'required|in:one_time,recurring',
        //     'donor_phone' => 'nullable|string|max:15',
        // ]);
        
        // $donors->update([
        //     'f_name' => $validated['f_name'],
        //     'l_name' => $validated['l_name'],
        //     'email' => $validated['email'],
        //     'institution_name' => $validated['institution_name'],
        //     'donation_preference' => $validated['donation_preference'],
        //     'donor_phone' => $validated['donor_phone'],
        // ]);
        
        // return response()->json([
        //     'message' => 'Donor updated successfully!',
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the donor by ID and delete it
       
    }
}
