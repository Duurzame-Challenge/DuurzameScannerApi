<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alternative;

class AlternativeSeeder extends Seeder
{
    public function run(): void
    {
        $alternatives = [
            ['product_id' => 1, 'alternative_product_id' => 2, 'reason' => 'More eco-friendly option.'],
            ['product_id' => 2, 'alternative_product_id' => 1, 'reason' => 'Cheaper alternative.'],
            ['product_id' => 3, 'alternative_product_id' => 4, 'reason' => 'Healthier option.'],
            ['product_id' => 4, 'alternative_product_id' => 3, 'reason' => 'Better taste.'],
            ['product_id' => 5, 'alternative_product_id' => 6, 'reason' => 'Locally sourced.'],
            ['product_id' => 6, 'alternative_product_id' => 5, 'reason' => 'Organic option.'],
            ['product_id' => 7, 'alternative_product_id' => 8, 'reason' => 'Less packaging.'],
            ['product_id' => 8, 'alternative_product_id' => 7, 'reason' => 'More sustainable.'],
            ['product_id' => 9, 'alternative_product_id' => 10, 'reason' => 'Lower carbon footprint.'],
            ['product_id' => 10, 'alternative_product_id' => 9, 'reason' => 'Fair trade certified.'],

        ];

        foreach ($alternatives as $alternative) {
            Alternative::create($alternative);
        }
    }
}
