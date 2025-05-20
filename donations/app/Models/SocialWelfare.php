<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialWelfare extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'social_welfare_name',
        'target_group',
        'program_type',
        'location',
        'specific_needs',
        'individuals_benefitting',
        'status',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
