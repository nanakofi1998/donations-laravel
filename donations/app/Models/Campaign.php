<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Donor;

class Campaign extends Model
{
    protected $fillable = [
        'campaign_name',
        'campaign_type',
        'funding_goal',
        'start_date',
        'end_date',
        'campaign_image',
        'campaign_contact_person',
        'campaign_contact_email',
        'campaign_description',
        'status',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function donors() 
    {
        return $this->hasMany(Donor::class);
    }
    public function beneficiaries()
    {
        return $this->belongsToMany(Beneficiary::class, 'campaign_beneficiary', 'campaign_id', 'beneficiary_id')
            ->withTimestamps();
    }
}
