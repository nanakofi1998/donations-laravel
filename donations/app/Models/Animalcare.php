<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animalcare extends Model
{
    protected $fillable = [
        'beneficiary_id',
        'type_of_care',
        'animal_species',
        'animal_needs',
        'location',
        'number_of_animals',
        'status',
    ];

    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class);
    }
}
