<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Education;
use App\Models\Healthcare;
use App\Models\Animalcare;
use App\Models\SocialWelfare;
use App\Models\Emergencyrelief;
use App\Models\Environmentalprotection;
use App\Models\CommunityDevelopment;
use App\Models\Disability;
use App\Models\PatientSupport;
use App\Models\Campaign;

class Beneficiary extends Model
{
    protected $fillable = [
        'beneficiary_name',
        'beneficiary_type',
        'beneficiary_contact_person',
        'beneficiary_contact_email',
        'beneficiary_contact_number',
        'beneficiary_description',
    ];
    
    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_beneficiary');
    }
    public function education()
    {
        return $this->hasOne(Education::class);
    }
    public function healthCare()
    {
        return $this->hasOne(Healthcare::class);
    }
    public function animalCare()
    {
        return $this->hasOne(Animalcare::class);
    }
    public function socialWelfare()
    {
        return $this->hasOne(SocialWelfare::class);
    }
    public function emergencyRelief()
    {
        return $this->hasOne(Emergencyrelief::class);
    }
    public function environmentalProtection ()
    {
        return $this->hasOne(Environmentalprotection::class);
    }
    public function communityDevelopment()
    {
        return $this->hasOne(CommunityDevelopment::class);
    }
    public function disability()   
    {
        return $this->hasOne(Disability::class);
    }
    public function patientSupport()
    {
        return $this->hasOne(PatientSupport::class);
    }
}
