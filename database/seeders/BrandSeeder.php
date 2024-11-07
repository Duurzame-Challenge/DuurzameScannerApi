<?php
// database/seeders/BrandSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Merk;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Merk::create(['name' => 'Brand 1']);
        Merk::create(['name' => 'Brand 2']);
        // Add more sample brands as needed
    }
}
