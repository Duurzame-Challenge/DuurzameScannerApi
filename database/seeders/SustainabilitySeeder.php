<?php
// database/seeders/SustainabilitySeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sustainability;

class SustainabilitySeeder extends Seeder
{
    public function run()
    {
        $sustainabilities = [
            [
                'label_name' => 'EU Ecolabel',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '3',
            ],
            [
                'label_name' => 'Fairtrade',
                'eco_score' => 'B',
                'bio_certified' => false,
                'animal_friendly_score' => '2',
            ],
            [
                'label_name' => 'Rainforest Alliance',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '4',
            ],
            [
                'label_name' => 'MSC',
                'eco_score' => 'A',
                'bio_certified' => false,
                'animal_friendly_score' => '3',
            ],
            [
                'label_name' => 'UTZ',
                'eco_score' => 'B',
                'bio_certified' => false,
                'animal_friendly_score' => '2',
            ],
            [
                'label_name' => 'Demeter',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '4',
            ],
            [
                'label_name' => 'EKO',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '3',
            ],
            [
                'label_name' => 'Biologisch',
                'eco_score' => 'A',
                'bio_certified' => true,
                'animal_friendly_score' => '4',
            ],
            [
                'label_name' => 'Milieukeur',
                'eco_score' => 'B',
                'bio_certified' => false,
                'animal_friendly_score' => '3',
            ],
            [
                'label_name' => 'Beter Leven',
                'eco_score' => 'B',
                'bio_certified' => false,
                'animal_friendly_score' => '2',
            ],
        ];

        foreach ($sustainabilities as $sustainabilityData) {
            Sustainability::create($sustainabilityData);
        }
    }
}