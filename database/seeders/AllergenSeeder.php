<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Allergen;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allergens = [
            ['name' => 'Pinda', 'description' => 'Pindas kunnen ernstige allergische reacties veroorzaken.'],
            ['name' => 'Noten', 'description' => 'Noten omvatten amandelen, walnoten en cashewnoten.'],
            ['name' => 'Melk', 'description' => 'Melkallergie is een reactie op eiwitten in koemelk.'],
            ['name' => 'Eieren', 'description' => 'Eiallergie is een reactie op eiwitten in eieren.'],
            ['name' => 'Tarwe', 'description' => 'Tarweallergie is een reactie op eiwitten in tarwe.'],
            ['name' => 'Soja', 'description' => 'Soja-allergie is een reactie op eiwitten in sojabonen.'],
            ['name' => 'Vis', 'description' => 'Visallergie is een reactie op eiwitten in vis.'],
            ['name' => 'Schaaldieren', 'description' => 'Schaaldierenallergie is een reactie op eiwitten in schaaldieren.'],
            ['name' => 'Sesam', 'description' => 'Sesamallergie is een reactie op eiwitten in sesamzaad.'],
            ['name' => 'Mosterd', 'description' => 'Mosterdallergie is een reactie op eiwitten in mosterdzaad.'],
            ['name' => 'Selderij', 'description' => 'Selderijallergie is een reactie op eiwitten in selderij.'],
            ['name' => 'Lupine', 'description' => 'Lupine-allergie is een reactie op eiwitten in lupinezaad.'],
            ['name' => 'Weekdieren', 'description' => 'Weekdierenallergie is een reactie op eiwitten in weekdieren.'],
            ['name' => 'Sulfieten', 'description' => 'Sulfieten kunnen allergische reacties veroorzaken bij gevoelige personen.'],
            ['name' => 'Gluten', 'description' => 'Glutenallergie is een reactie op eiwitten in tarwe, gerst en rogge.'],
        ];

        foreach ($allergens as $allergen) {
            Allergen::create($allergen);
        }
    }
}
