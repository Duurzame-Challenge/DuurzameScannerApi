<?php
// database/seeders/CategorieSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorie::create(['name' => 'Categorie 1']);
        Categorie::create(['name' => 'Categorie 2']);
        // Add more sample categories as needed
    }
}
