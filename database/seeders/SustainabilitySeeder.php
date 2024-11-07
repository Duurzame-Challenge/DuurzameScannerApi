<?php
// database/seeders/SustainabilitySeeder.php

namespace Database\Seeders;

use App\Models\Duurzaamheid;
use Illuminate\Database\Seeder;
use App\Models\Sustainability;

class SustainabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Duurzaamheid::create([
            'label_name' => 'EcoLabel',
            'eco_score' => 'A',
            'bio_certified' => true,
            'animal_friendly_score' => 'B',
        ]);

        Duurzaamheid::create([
            'label_name' => 'GreenSeal',
            'eco_score' => 'B',
            'bio_certified' => false,
            'animal_friendly_score' => 'A',
        ]);

        // Add more sample sustainability records as needed
    }
}
