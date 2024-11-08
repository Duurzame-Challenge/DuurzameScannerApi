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
            ['name' => 'Peanuts', 'description' => 'Peanuts can cause severe allergic reactions.'],
            ['name' => 'Tree Nuts', 'description' => 'Tree nuts include almonds, walnuts, and cashews.'],
            ['name' => 'Milk', 'description' => 'Milk allergy is a reaction to proteins found in cow\'s milk.'],
            ['name' => 'Eggs', 'description' => 'Egg allergy is a reaction to proteins found in eggs.'],
            ['name' => 'Wheat', 'description' => 'Wheat allergy is a reaction to proteins found in wheat.'],
            ['name' => 'Soy', 'description' => 'Soy allergy is a reaction to proteins found in soybeans.'],
            ['name' => 'Fish', 'description' => 'Fish allergy is a reaction to proteins found in fish.'],
            ['name' => 'Shellfish', 'description' => 'Shellfish allergy is a reaction to proteins found in shellfish.'],
            ['name' => 'Sesame', 'description' => 'Sesame allergy is a reaction to proteins found in sesame seeds.'],
            ['name' => 'Mustard', 'description' => 'Mustard allergy is a reaction to proteins found in mustard seeds.'],
        ];

        foreach ($allergens as $allergen) {
            Allergen::create($allergen);
        }
    }
}
