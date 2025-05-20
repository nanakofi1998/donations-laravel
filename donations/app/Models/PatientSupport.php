<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientSupport extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'patient_id',
        'type_of_support',
        'health_condition',
        'medical_needs',
        'location',
        'facility_name',
        'facility_address',
        'timeline_for_support',
        'status'
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
