<?php

namespace Database\Seeders;

use App\Models\Variety;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VarietiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $commonVarieties = [
            "Cabernet Sauvignon",
            "Merlot",
            "Pinot Noir",
            "Syrah/Shiraz",
            "Chardonnay",
            "Sauvignon Blanc",
            "Riesling",
            "Zinfandel",
            "Malbec",
            "Tempranillo",
            "Sangiovese",
            "Grenache/Garnacha",
            "Cabernet Franc",
            "Petit Verdot",
            "Pinot Grigio/Pinot Gris",
            "Chenin Blanc",
            "Viognier",
            "Nebbiolo",
            "Barbera",
            "Gamay",
            "Vermentino",
            "Albariño",
            "Grüner Veltliner",
            "Muscat/Moscato",
            "Semillon",
            "Gewürztraminer",
            "Dolcetto",
            "Montepulciano",
            "Tannat",
            "Carmenère",
            "Tempranillo Blanco",
            "Falanghina",
            "Glera (used for Prosecco)",
            "Torrontés",
            "Aglianico",
            "Nero d'Avola",
            "Tinta de Toro",
            "Pinot Blanc",
            "Marsanne",
            "Roussanne",
            "Trebbiano",
            "Verdelho",
            "Tannat",
            "Touriga Nacional",
            "Viura/Macabeo",
            "Sémillon",
            "Clairette",
            "Carignan",
            "Petit Manseng",
            "Arneis",
        ];

        foreach ($commonVarieties as $variety) {
            Variety::create(['name' => $variety]);
        }
    }
}
