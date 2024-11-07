<?php
// database/seeders/SustainabilitySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sustainability;
use App\Models\Product;

class SustainabilitySeeder extends Seeder
{
    public function run()
    {
        $sustainabilities = [
            [
                'label_name' => 'EcoLabel',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '2',
            ],
            [
                'label_name' => 'GreenSeal',
                'eco_score' => 'B',
                'bio_certified' => false,
                'animal_friendly_score' => '1',
            ],
            // Add more sample sustainability records as needed
        ];

        // Add 18 more records to make a total of 20
        for ($i = 3; $i <= 20; $i++) {
            $sustainabilities[] = [
                'label_name' => 'Label' . $i,
                'eco_score' => chr(64 + ($i % 5) + 1), // Cycles through A-E
                'bio_certified' => $i % 2 == 0,
                'animal_friendly_score' => (string)(($i % 4) + 1), // Cycles through 1-4
            ];
        }

        foreach ($sustainabilities as $sustainabilityData) {
            $sustainability = Sustainability::create($sustainabilityData);

            // Associate sustainabilities with random products
            $products = Product::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $sustainability->products()->attach($products);
        }
    }
}
