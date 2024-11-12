<?php
// database/seeders/AlternativeSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class AlternativeSeeder extends Seeder
{
    public function run(): void
    {
        $alternatives = [
            ['product_id' => 1, 'alternative_id' => 2, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 1, 'alternative_id' => 3, 'reason' => 'Gezonder alternatief.'],

            ['product_id' => 4, 'alternative_id' => 5, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 4, 'alternative_id' => 6, 'reason' => 'Ecologisch alternatief.'],

            ['product_id' => 7, 'alternative_id' => 17, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 7, 'alternative_id' => 18, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 7, 'alternative_id' => 19, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 7, 'alternative_id' => 20, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 10, 'alternative_id' => 21, 'reason' => 'Minder verpakking.'],
            ['product_id' => 10, 'alternative_id' => 22, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 10, 'alternative_id' => 23, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 10, 'alternative_id' => 24, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 13, 'alternative_id' => 25, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 13, 'alternative_id' => 26, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 13, 'alternative_id' => 27, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 13, 'alternative_id' => 28, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 16, 'alternative_id' => 29, 'reason' => 'Minder verpakking.'],
            ['product_id' => 16, 'alternative_id' => 30, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 16, 'alternative_id' => 31, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 16, 'alternative_id' => 32, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 19, 'alternative_id' => 81, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 19, 'alternative_id' => 82, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 19, 'alternative_id' => 83, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 19, 'alternative_id' => 84, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 20, 'alternative_id' => 85, 'reason' => 'Minder verpakking.'],
            ['product_id' => 20, 'alternative_id' => 86, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 20, 'alternative_id' => 87, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 20, 'alternative_id' => 88, 'reason' => 'Fair trade gecertificeerd.'],
        ];

        foreach ($alternatives as $alternative) {
            // Ensure the product_id and alternative_id exist in the products table
            if (Product::find($alternative['product_id']) && Product::find($alternative['alternative_id'])) {
                Product::find($alternative['product_id'])->alternatives()->attach($alternative['alternative_id'], ['reason' => $alternative['reason']]);
            }
        }
    }
}
