<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Environmentalprotection extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'environmental_protection_name',
        'type_of_initiative',
        'required_resources',
        'location',
        'number_of_areas',
        'status'
    ];
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
}
