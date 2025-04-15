<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'donor_email',
        'organization_name',
        'donor_amount',
        'donation_preference',
        'donor_phone',
        'anonymous',
        'donor_message',
    ];

    public function campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'campaign_donor', 'donor_id', 'campaign_id');
    }
    public function getFullNameAttribute()
    {
        return $this->f_name . ' ' . $this->l_name;
    }
}
