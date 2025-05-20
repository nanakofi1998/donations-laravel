<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Healthcare;
use App\Models\Animalcare;
use App\Models\SocialWelfare;
use App\Models\Emergencyrelief;
use App\Models\Environmentalprotection;
use App\Models\CommunityDevelopment;
use App\Models\Disability;
use App\Models\PatientSupport;
use App\Models\Beneficiary;
use Illuminate\Support\Facades\DB;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.add_beneficiary');
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
        $request->validate([
            'beneficiary_name' => 'required|string|max:255',
            'beneficiary_type' => 'required|in:education,healthcare,animal-care,social-welfare,emergency-relief,environmental-protection,community-development,persons-with-disability,single-patient-support',
            'beneficiary_contact_person' => 'required|string|max:255',
            'beneficiary_contact_email' => 'required|email|max:255',
            'beneficiary_contact_number' => 'required|string|max:15',
            'beneficiary_description' => 'nullable|string',
        ]);

        try {
            DB::transaction(function () use ($request) {
                $beneficiary = Beneficiary::create([
                    'beneficiary_name' => $request->beneficiary_name,
                    'beneficiary_type' => $request->beneficiary_type,
                    'beneficiary_contact_person' => $request->beneficiary_contact_person,
                    'beneficiary_contact_email' => $request->beneficiary_contact_email,
                    'beneficiary_contact_number' => $request->beneficiary_contact_number,
                    'status' => 'active',
                    'beneficiary_description' => $request->beneficiary_description,
                ]);
        
                switch ($request->beneficiary_type) {
                    case 'education':
                        $request->validate([
                            'school_name' => 'required|string|max:255',
                            'school_location' => 'required|string|max:255',
                            'school_type' => 'required|in:primary,secondary,tertiary',
                            'education_level' => 'required|in:elementary,high-school,undergraduate',
                            'education_needs' => 'required|in:books,schorlarships,infrastructure',
                            'number_of_beneficiaries' => 'required|integer'
                        ]);
        
                        Education::create([
                            'beneficiary_id' => $beneficiary->id,
                            'school_name' => $request->school_name,
                            'school_location' => $request->school_location,
                            'school_type' => $request->school_type,
                            'education_level' => $request->education_level,
                            'education_needs' => $request->education_needs,
                            'number_of_beneficiaries' => $request->number_of_beneficiaries,
                            'status' => 'active',
                        ]);
                        break;
                    case 'healthcare':
                        $request->validate([
                            'healthcare_name' => 'required|string|max:255',
                            'support_type' => 'required|in:medical-support,hospital-equipment,patient-care',
                            'specific_condition' => 'required|in:cancer,diabetes,general-support',
                            'healthcare_location' => 'required|string|max:255',
                            'number_of_patients' => 'required|integer'
                        ]);
                        Healthcare::create([
                            'beneficiary_id' => $beneficiary->id,
                            'healthcare_name' => $request->healthcare_name,
                            'support_type' => $request->support_type,
                            'specific_condition' => $request->specific_condition,
                            'healthcare_location' => $request->healthcare_location,
                            'number_of_patients' => $request->number_of_patients,
                            'status' => 'active',
                        ]);
                        break;
                    case 'animal-care':
                        $request->validate([
                            'type_of_care' => 'required|in:shelter,rescue,wildfire-protection',
                            'animal_species' => 'required|in:dog,cat,wildlife',
                            'animal_needs' => 'required|in:food,medical,adoption',
                            'location' => 'required|string|max:255',
                            'number_of_animals' => 'required|integer'
                        ]);
                        Animalcare::create([
                            'beneficiary_id' => $beneficiary->id,
                            'type_of_care' => $request->type_of_care,
                            'animal_species' => $request->animal_species,
                            'animal_needs' => $request->animal_needs,
                            'location' => $request->location,
                            'number_of_animals' => $request->number_of_animals,
                            'status' => 'active',
                        ]);
                        break;
                    case 'social-welfare':
                        $request->validate([
                            'social_welfare_name' => 'required|string|max:255',
                            'target_group' => 'required|in:low-income-families,orphans,elderly',
                            'program_type' => 'required|in:food-distribution,housing-assistance,counseling',
                            'location' => 'required|string|max:255',
                            'specific_needs' => 'required|in:food-supplies,clothing,counseling-services',
                            'individuals_benefitting' => 'required|string|max:255',
                        ]);
                        SocialWelfare::create([
                            'beneficiary_id' => $beneficiary->id,
                            'social_welfare_name' => $request->social_welfare_name,
                            'target_group' => $request->target_group,
                            'program_type' => $request->program_type,
                            'location' => $request->location,
                            'specific_needs' => $request->specific_needs,
                            'individuals_benefitting' => $request->individuals_benefitting,
                            'status' => 'active',
                        ]);
                        break;
                    case 'emergency-relief':
                        $request->validate([
                            'emergency_relief_name' => 'required|string|max:255',
                            'type_of_emergency' => 'required|in:natural-disaster,war,pandemic',
                            'immediate_needs' => 'required|in:food,shelter,medical-supplies',
                            'relief_timeframe' => 'required|string|max:255',
                            'location' => 'required|string|max:255',
                        ]);
                        Emergencyrelief::create([
                            'beneficiary_id' => $beneficiary->id,
                            'emergency_relief_name' => $request->emergency_relief_name,
                            'type_of_emergency' => $request->type_of_emergency,
                            'immediate_needs' => $request->immediate_needs,
                            'relief_timeframe' => $request->relief_timeframe,
                            'location' => $request->location,
                            'status' => 'active',
                        ]);
                        break;
                    case 'environmental-protection':
                        $request->validate([
                            'environmental_protection_name' => 'required|string|max:255',
                            'type_of_initiative' => 'required|in:reforestation,wildlife-conservation,clean-water',
                            'required_resources' => 'required|in:funding,volunteers,equipment',
                            'location' => 'required|string|max:255',
                            'number_of_areas' => 'required|integer'
                        ]);
                        Environmentalprotection::create([
                            'beneficiary_id' => $beneficiary->id,
                            'environmental_protection_name' => $request->environmental_protection_name,
                            'type_of_initiative' => $request->type_of_initiative,
                            'required_resources' => $request->required_resources,
                            'location' => $request->location,
                            'number_of_areas' => $request->number_of_areas,
                            'status' => 'active',
                        ]);
                        break;
                    case 'community-development':
                        $request->validate([
                            'target_community' => 'required|in:urban,rural,indigenous',
                            'type_of_development' => 'required|in:infrastructure,education,economic-empowerment',
                            'educational_needs' => 'required|in:books,scholarships,infrastructure',
                            'location' => 'required|string|max:255',
                            'number_of_beneficiaries' => 'required|integer'
                        ]);
                        CommunityDevelopment::create([
                            'beneficiary_id' => $beneficiary->id,
                            'target_community' => $request->target_community,
                            'type_of_development' => $request->type_of_development,
                            'educational_needs' => $request->educational_needs,
                            'location' => $request->location,
                            'number_of_beneficiaries' => $request->number_of_beneficiaries,
                            'status' => 'active',
                        ]);
                        break;
                    case 'persons-with-disability':
                        $request->validate([
                            'disability_type' => 'required|in:mobility-aids,rehabilitation,inclusive-education',
                            'specific_needs' => 'required|in:assistive-devices,accessibility-improvements',
                            'location' => 'required|string|max:255',
                            'number_of_beneficiaries' => 'required|integer'
                        ]);
                        Disability::create([
                            'beneficiary_id' => $beneficiary->id,
                            'disability_type' => $request->disability_type,
                            'specific_needs' => $request->specific_needs,
                            'location' => $request->location,
                            'number_of_beneficiaries' => $request->number_of_beneficiaries,
                            'status' => 'active',
                        ]);
                        break;
                    case 'single-patient-support':
                        $request->validate([
                            'patient_id' => 'required|string|max:255',
                            'type_of_support' => 'required|in:medical-supplies,therapy,medication',
                            'health_condition' => 'required|in:cancer,chronic-illness,disability',
                            'medical_needs' => 'required|in:surgery,rehabilitation,medication',
                            'location' => 'required|string|max:255',
                            'facility_name' => 'required|string|max:255',
                            'facility_address' => 'required|string|max:255',
                            'timeline_for_support' => 'required|string|max:255'
                        ]);
                        PatientSupport::create([
                            'beneficiary_id' => $beneficiary->id,
                            'patient_id' => $request->patient_id,
                            'type_of_support' => $request->type_of_support,
                            'health_condition' => $request->health_condition,
                            'medical_needs' => $request->medical_needs,
                            'location' => $request->location,
                            'facility_name' => $request->facility_name,
                            'facility_address' => $request->facility_address,
                            'timeline_for_support' => $request->timeline_for_support,
                            'status' => 'active',
                        ]);
                        break;
                }
        
                // Store the beneficiary in the database
                // Beneficiary::create($request->all());
        
                return redirect()->back()->withInput([])->with('success', 'Beneficiary created successfully!');
            });
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while creating the beneficiary: ' . $e->getMessage());
        }
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
