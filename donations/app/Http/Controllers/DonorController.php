<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
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
    public function store(Request $request)
    {
        
       $validated = $request->validateWithBag( 'donors',[
         'donor_type' => ['required', Rule::in(['individual', 'institution'])],
         'f_name' => ['required_if:donor_type,individual','string','max:255'],
         'l_name' => ['required_if:donor_type,individual','string','max:255'],
         'institution_name' => ['required_if:donor_type,institution', 'string','max:255'],
         'institution_address' => ['required_if:donor_type,institution', 'string', 'max:255'],
         'email' => ['required','email', 'unique:donors,email'],
         'donor_amount' => ['required','numeric','min:0'],
         'donation_preference' => ['required', Rule::in(['one_time', 'recurring'])],
         'campaign_id' => ['nullable', 'integer', 'exists:campaigns,id'],
         'donor_phone' => ['nullable', 'string', 'max:15'],
         'donor_message' => ['nullable','string', 'max:65535'],
         'anonymous' => ['nullable','boolean'],
       ]);
       $dataToSave = [
         'donor_type' => $validated['donor_type'],
         'f_name' => $validated['f_name'] ?? null,
         'l_name' => $validated['l_name'] ?? null,
         'institution_name' => $validated['institution_name'] ?? null,
         'institution_address' => $validated['institution_address'] ?? null,
         'email' => $validated['email'],
         'donor_amount' => $validated['donor_amount'],
         'donation_preference' => $validated['donation_preference'],
         'campaign_id' => $validated['campaign_id'] ?? null,
         'donor_phone' => $validated['donor_phone'] ?? null,
         'donor_status' => 'active',
         'donor_message' => $validated['donor_message'] ?? null,
         'anonymous' => $validated['anonymous'] ?? false,
       ];

       if($validated['donor_type'] === 'individual') {
         $dataToSave['f_name'] = $validated['f_name'];
         $dataToSave['l_name'] = $validated['l_name'];
       } elseif($validated['donor_type'] === 'institution') {
         $dataToSave['institution_name'] = $validated['institution_name'];
         $dataToSave['institution_address'] = $validated['institution_address'];
       }
         // Create a new donor record in the database
         try {
             $donor = Donor::create($dataToSave);
             return redirect()->back()->withInput([])->with('successMessage', 'Donor created successfully!');
         } catch (\Exception $e) {
             return redirect()->back()->with('errorMessage', 'Failed to create donor: ' . $e->getMessage());
         }
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
