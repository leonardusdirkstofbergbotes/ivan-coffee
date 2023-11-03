<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variety extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function wineProducts()
    {
        return $this->hasMany(WineProduct::class);
    }
}
