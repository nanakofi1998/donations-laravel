<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'institution_name',
        'institution_address',
        'donor_amount',
        'donor_type',
        'donor_status',
        'donation_preference',
        'donor_phone',
        'anonymous',
        'donor_message',
        'campaign_id',
    ];

    public function campaigns(): BelonsTo
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
    public function getFullNameAttribute()
    {
        if ($this->donor_type == 'individual') {
            return $this->f_name . ' ' . $this->l_name;
        } else {
            return $this->institution_name;
        }
    }
    public function getDisplayNameAttribute()
    {
        if ($this->donor_type === 'individual') {
            return $this->anonymous ? 'Anonymous' : $this->getFullNameAttribute() ?? 'Individual Donor';
        } elseif ($this->donor_type === 'institution') {
            return $this->anonymous ? 'Anonymous' : $this->institution_name ?? 'Institution Donor';
        } else {
            return 'Unknown Donor Type';
        }
    }
}
