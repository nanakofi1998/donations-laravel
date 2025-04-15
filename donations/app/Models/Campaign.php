<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'campaign_name',
        'campaign_description',
        'goal_amount',
        'start_date',
        'end_date',
        'status',
    ];

    public function donors()
    {
        return $this->belongsToMany(Donor::class, 'campaign_donor', 'campaign_id', 'donor_id');
    }
    public function getStatusAttribute($value)
    {
        return $value === 1 ? 'active' : 'inactive';
    }
}
