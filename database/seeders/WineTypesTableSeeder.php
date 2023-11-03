<?php

namespace Database\Seeders;

use App\Models\WineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commonWineTypes = [
            'Red Wine',
            'White Wine',
            'Rosé Wine',
            'Sparkling Wine',
            'Dessert Wine',
        ];

        foreach ($commonWineTypes as $type) {
            WineType::create(['name' => $type]);
        }
    }
}
