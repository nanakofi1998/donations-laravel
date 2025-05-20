<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'disability_type',
        'specific_needs',
        'location',
        'number_of_beneficiaries',
        'status',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
