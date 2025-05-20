<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergencyrelief extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'emergency_relief_name',
        'type_of_emergency',
        'immediate_needs',
        'relief_timeframe',
        'location',
        'status',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
