<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        'name', 'origin', 'taste_factors', 'strength', 'description'
    ];

    protected $casts = [
        'taste_factors' => 'json'
    ];

    public function pricingOptions()
    {
        return $this->hasMany(PricingOption::class);
    }
}
