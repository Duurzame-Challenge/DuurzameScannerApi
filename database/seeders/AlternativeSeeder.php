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
            ['product_id' => 11, 'alternative_product_id' => 12, 'reason' => 'Non-GMO.'],
            ['product_id' => 12, 'alternative_product_id' => 11, 'reason' => 'Gluten-free.'],
            ['product_id' => 13, 'alternative_product_id' => 14, 'reason' => 'Vegan option.'],
            ['product_id' => 14, 'alternative_product_id' => 13, 'reason' => 'Dairy-free.'],
            ['product_id' => 15, 'alternative_product_id' => 16, 'reason' => 'No added sugar.'],
            ['product_id' => 16, 'alternative_product_id' => 15, 'reason' => 'High in protein.'],
            ['product_id' => 17, 'alternative_product_id' => 18, 'reason' => 'Low in fat.'],
            ['product_id' => 18, 'alternative_product_id' => 17, 'reason' => 'Rich in vitamins.'],
            ['product_id' => 19, 'alternative_product_id' => 20, 'reason' => 'Better for the environment.'],
            ['product_id' => 20, 'alternative_product_id' => 19, 'reason' => 'Ethically sourced.'],
        ];

        foreach ($alternatives as $alternative) {
            Alternative::create($alternative);
        }
    }
}
