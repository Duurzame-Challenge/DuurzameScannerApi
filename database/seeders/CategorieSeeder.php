<?php
// database/seeders/CategorieSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Categorie 1']);
        Category::create(['name' => 'Categorie 2']);
        // Add more sample categories as needed
    }
}
