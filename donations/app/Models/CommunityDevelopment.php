<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommunityDevelopment extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'target_community',
        'type_of_development',
        'educational_needs',
        'location',
        'number_of_beneficiaries',
        'status'
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}
