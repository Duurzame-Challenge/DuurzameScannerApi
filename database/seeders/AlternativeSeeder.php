<?php
// database/seeders/AlternativeSeeder.php
namespace Database\Seeders;

use App\Models\Alternative;
use Illuminate\Database\Seeder;
use App\Models\Product;

class AlternativeSeeder extends Seeder
{
    public function run(): void
    {
        $alternatives = [
            ['product_id' => 1, 'alternative_product_id' => 12, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 1, 'alternative_product_id' => 19, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 1, 'alternative_product_id' => 20, 'reason' => 'Lokaal geproduceerd.'],
            ['product_id' => 1, 'alternative_product_id' => 21, 'reason' => 'Minder verpakking.'],

            ['product_id' => 2, 'alternative_product_id' => 13, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 2, 'alternative_product_id' => 14, 'reason' => 'Ecologisch alternatief.'],
            ['product_id' => 2, 'alternative_product_id' => 15, 'reason' => 'Diervriendelijk alternatief.'],
            ['product_id' => 2, 'alternative_product_id' => 16, 'reason' => 'Veganistisch alternatief.'],

            ['product_id' => 3, 'alternative_product_id' => 17, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 3, 'alternative_product_id' => 18, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 3, 'alternative_product_id' => 19, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 3, 'alternative_product_id' => 20, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 4, 'alternative_product_id' => 21, 'reason' => 'Minder verpakking.'],
            ['product_id' => 4, 'alternative_product_id' => 22, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 4, 'alternative_product_id' => 23, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 4, 'alternative_product_id' => 24, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 5, 'alternative_product_id' => 25, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 5, 'alternative_product_id' => 26, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 5, 'alternative_product_id' => 27, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 5, 'alternative_product_id' => 28, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 6, 'alternative_product_id' => 29, 'reason' => 'Minder verpakking.'],
            ['product_id' => 6, 'alternative_product_id' => 30, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 6, 'alternative_product_id' => 31, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 6, 'alternative_product_id' => 32, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 7, 'alternative_product_id' => 33, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 7, 'alternative_product_id' => 34, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 7, 'alternative_product_id' => 35, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 7, 'alternative_product_id' => 36, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 8, 'alternative_product_id' => 37, 'reason' => 'Minder verpakking.'],
            ['product_id' => 8, 'alternative_product_id' => 38, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 8, 'alternative_product_id' => 39, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 8, 'alternative_product_id' => 40, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 9, 'alternative_product_id' => 41, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 9, 'alternative_product_id' => 42, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 9, 'alternative_product_id' => 43, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 9, 'alternative_product_id' => 44, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 10, 'alternative_product_id' => 45, 'reason' => 'Minder verpakking.'],
            ['product_id' => 10, 'alternative_product_id' => 46, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 10, 'alternative_product_id' => 47, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 10, 'alternative_product_id' => 48, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 11, 'alternative_product_id' => 49, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 11, 'alternative_product_id' => 50, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 11, 'alternative_product_id' => 51, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 11, 'alternative_product_id' => 52, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 12, 'alternative_product_id' => 53, 'reason' => 'Minder verpakking.'],
            ['product_id' => 12, 'alternative_product_id' => 54, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 12, 'alternative_product_id' => 55, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 12, 'alternative_product_id' => 56, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 13, 'alternative_product_id' => 57, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 13, 'alternative_product_id' => 58, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 13, 'alternative_product_id' => 59, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 13, 'alternative_product_id' => 60, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 14, 'alternative_product_id' => 61, 'reason' => 'Minder verpakking.'],
            ['product_id' => 14, 'alternative_product_id' => 62, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 14, 'alternative_product_id' => 63, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 14, 'alternative_product_id' => 64, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 15, 'alternative_product_id' => 65, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 15, 'alternative_product_id' => 66, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 15, 'alternative_product_id' => 67, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 15, 'alternative_product_id' => 68, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 16, 'alternative_product_id' => 69, 'reason' => 'Minder verpakking.'],
            ['product_id' => 16, 'alternative_product_id' => 70, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 16, 'alternative_product_id' => 71, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 16, 'alternative_product_id' => 72, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 17, 'alternative_product_id' => 73, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 17, 'alternative_product_id' => 74, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 17, 'alternative_product_id' => 75, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 17, 'alternative_product_id' => 76, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 18, 'alternative_product_id' => 77, 'reason' => 'Minder verpakking.'],
            ['product_id' => 18, 'alternative_product_id' => 78, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 18, 'alternative_product_id' => 79, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 18, 'alternative_product_id' => 80, 'reason' => 'Fair trade gecertificeerd.'],

            ['product_id' => 19, 'alternative_product_id' => 81, 'reason' => 'Biologisch alternatief.'],
            ['product_id' => 19, 'alternative_product_id' => 82, 'reason' => 'Vegetarisch alternatief.'],
            ['product_id' => 19, 'alternative_product_id' => 83, 'reason' => 'Gezonder alternatief.'],
            ['product_id' => 19, 'alternative_product_id' => 84, 'reason' => 'Lokaal geproduceerd.'],

            ['product_id' => 20, 'alternative_product_id' => 85, 'reason' => 'Minder verpakking.'],
            ['product_id' => 20, 'alternative_product_id' => 86, 'reason' => 'Duurzamer alternatief.'],
            ['product_id' => 20, 'alternative_product_id' => 87, 'reason' => 'Lagere CO2-uitstoot.'],
            ['product_id' => 20, 'alternative_product_id' => 88, 'reason' => 'Fair trade gecertificeerd.'],
        ];

        foreach ($alternatives as $alternative) {
            // Ensure the product_id and alternative_product_id exist in the products table
            if (Product::find($alternative['product_id']) && Product::find($alternative['alternative_product_id'])) {
                Alternative::create($alternative);
            }
        }
    }
}
