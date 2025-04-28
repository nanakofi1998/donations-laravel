<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        'beneficiary_name',
        'beneficiary_type',
        'beneficiary_contact_person',
        'beneficiary_contact_email',
        'beneficiary_description',
    ];
    
    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_beneficiary');
    }
}
