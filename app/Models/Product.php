<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'bottling_year',
        'blend_information',
        'bottle_size',
        'alcohol_level',
        'wine_maker',
        'wine_type_id',
        'cellar_id',
        'variety_id',
    ];

    public function wineType()
    {
        return $this->belongsTo(WineType::class, 'wine_type_id');
    }

    public function cellar()
    {
        return $this->belongsTo(Cellar::class, 'cellar_id');
    }

    public function variety()
    {
        return $this->belongsTo(Variety::class, 'variety_id');
    }

    public function productStocks()
    {
        return $this->hasMany(ProductStock::class);
    }
}
