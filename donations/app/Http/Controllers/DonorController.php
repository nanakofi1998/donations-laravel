<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        // Fetch all donors to display in the view
        $donors = Donor::with('campaigns')->get();
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
                    $donor->donor_email,
                    $donor->donation_preference,
                    $donor->campaigns->pluck('campaign_name')->join(', '),
                ]);
            };
    
            fclose($file);
            };
            return Response::stream($callback, 200, array_merge($headers, [
                'Content-Desposition' => "attachment; filename=\"$filename\"",
            ]));
        };
        // Pass the donors to the view
        return view('admin.manage_donors', compact('donors'));
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
    public function store(Request $request)
    {
        $validated = $request -> validate ([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'donor_email' => 'required|email|unique:donors,donor_email',
            'organization_name' => 'nullable|string|max:255',
            'donor_amount' => 'required|numeric|min:0',
            'donation_preference' => 'required|in:one_time,recurring,crowd_funding',
            'donor_phone' => 'nullable|string|max:15',
            'anonymous' => 'nullable|boolean',
            'donor_message' => 'nullable|string|max:1000',
            'campaign_id' => 'nullable|exists:campaigns,id',
        ]);

        $donor = Donor::create([
            'f_name' => $validated['f_name'],
            'l_name' => $validated['l_name'],   
            'donor_email' => $validated['donor_email'],
            'organization_name' => $validated['organization_name'],
            'donor_amount' => $validated['donor_amount'],
            'donation_preference' => $validated['donation_preference'],
            'donor_phone' => $validated['donor_phone'],
            'anonymous' => $validated['anonymous'] ?? false,
            'donor_message' => $validated['donor_message'],
        ]);

        if (!empty($validated['campaign_id'])) {
            $donor->campaigns()->attach($validated['campaign_id']);
        }
        return redirect()->back()->withInput([])->with('success', 'Donor added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch all campaigns to display in the dropdown
        $campaigns = Campaign::all();
        // Pass the campaigns to the view
        return view('admin.manage_donors', compact('campaigns'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the donor by ID to edit
        $donor = Donor::findOrFail($id);
        // Fetch all campaigns to display in the dropdown
        $campaigns = Campaign::all();
        // Pass the donor and campaigns to the view
        return back()->with  ('success', 'Donor details edited successfully'); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $donors = Donor::findOrFail($id);
        $validated = $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'donor_email' => 'required|email|unique:donors,donor_email,' . $id,
            'organization_name' => 'nullable|string|max:255',
            'donation_preference' => 'required|in:one_time,recurring,crowd_funding',
            'donor_phone' => 'nullable|string|max:15',
        ]);

        $donors->update([
            'f_name' => $validated['f_name'],
            'l_name' => $validated['l_name'],
            'donor_email' => $validated['donor_email'],
            'organization_name' => $validated['organization_name'],
            'donation_preference' => $validated['donation_preference'],
            'donor_phone' => $validated['donor_phone'],
        ]); 

        return response()->json([
            'message' => 'Donor updated successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the donor by ID and delete it
        $donor = Donor::findOrFail($id);
        $donor->delete();

        // Redirect back with a success message
        return back()->with('success', 'Donor deleted successfully!');
    }
}
