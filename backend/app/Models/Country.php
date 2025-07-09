<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    /** @use HasFactory<\Database\Factories\CountryFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'iso_code',
        'flag',
        'description',   
        'population' 
    ];

     public function cities()
    {
        return $this->hasMany(\App\Models\City::class);
    }
}
