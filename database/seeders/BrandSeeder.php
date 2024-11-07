<?php
// database/seeders/BrandSeeder.php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

use App\Models\Merk;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(['name' => 'Brand 1']);
        Brand::create(['name' => 'Brand 2']);
        // Add more sample brands as needed
    }
}
