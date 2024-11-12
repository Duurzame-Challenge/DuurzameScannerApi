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
            ['product_id' => 1, 'alternative_product_id' => 2, 'reason' => '37% minder uitstoot per kg'],
            ['product_id' => 1, 'alternative_product_id' => 3, 'reason' => 'Vegan optie'],

            ['product_id' => 4, 'alternative_product_id' => 5, 'reason' => 'Vaker vanuit Nederland'],
            ['product_id' => 4, 'alternative_product_id' => 6, 'reason' => 'Altijd vanuit Nederland'],

            ['product_id' => 7, 'alternative_product_id' => 8, 'reason' => '2 beterleven sterren.'],
            ['product_id' => 7, 'alternative_product_id' => 9, 'reason' => '3 beterleven sterren'],

            ['product_id' => 10, 'alternative_product_id' => 11, 'reason' => 'Biologisch en fairtrade'],
            ['product_id' => 10, 'alternative_product_id' => 12, 'reason' => 'Duurzamer type fruit'],

            ['product_id' => 13, 'alternative_product_id' => 14, 'reason' => 'Minder melk verbruik'],
            ['product_id' => 13, 'alternative_product_id' => 15, 'reason' => 'Biologische keuze'],

            ['product_id' => 16, 'alternative_product_id' => 17, 'reason' => 'Niet gekweekt'],
            ['product_id' => 16, 'alternative_product_id' => 18, 'reason' => 'Duurzamer type vis'],

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
