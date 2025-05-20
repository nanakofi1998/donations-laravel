<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Campaign;

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
        'donor_source',
        'donor_lead_type',
        'pipeline_stage',
        'donor_status',
        'donation_preference',
        'donor_phone',
        'donor_message',
        'campaign_id',
    ];


    public function campaigns(): BelongsTo
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
}
