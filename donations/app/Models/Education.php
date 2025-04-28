<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'school_name',
        'school_location',
        'school_type',
        'education_level',
        'education_needs',
        'number_of_beneficiaries',
        'status',
        'beneficiary_id',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
