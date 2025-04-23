<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Donor;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all campaigns to display in the dropdown
        
        // Pass the campaigns to the view
        return view('admin.add_campaign');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'campaign_name' => 'required|string|max:255',
            'campaign_type' => 'required|in:education,healthcare,animal-care,social-welfare,emergency-relief,environmental-protection,community-development,persons-with-disability,single-patient-support',
            'campaign_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'campaign_contact_person' => 'nullable|string|max:255',
            'campaign_contact_email' => 'nullable|email|max:255',
            'campaign_description' => 'required|string|max:1000',
            'funding_goal' => 'required|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        
        $data = $request->except('campaign_image');

        if ($request->hasFile('campaign_image')) {
            $imagePath = $request->file('campaign_image')->store('campaigns', 'public');
            $data['campaign_image'] = $imagePath;   
        }
        Campaign::create($data);

        return redirect()->route('add_campaign')->with('successMessage', 'Campaign created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
