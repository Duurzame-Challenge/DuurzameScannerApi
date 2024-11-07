<?php
// database/seeders/AlternativeSeeder.php

namespace Database\Seeders;

use App\Models\Alternatief;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alternatief::create([
            'product_id' => 1,
            'alternative_product_id' => 2,
            'reason' => 'More eco-friendly option.',
        ]);

        Alternatief::create([
            'product_id' => 2,
            'alternative_product_id' => 1,
            'reason' => 'Cheaper alternative.',
        ]);

        // Add more sample alternatives as needed
    }
}
