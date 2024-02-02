<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingOption extends Model
{
    protected $fillable = [
        'coffee_id', 'quantity_in_grams', 'price'
    ];

    public function coffee()
    {
        return $this->belongsTo(Coffee::class);
    }
}
