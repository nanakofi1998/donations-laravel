<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Healthcare extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'healthacre_name',
        'support_type',
        'specific_condition',
        'healthcare_location',
        'number_of_patients',
        'status',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
