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
            // Alternatives for product ID 1
            ['product_id' => 1, 'alternative_id' => 2, 'reason' => '37% minder uitstoot per kg'],
            ['product_id' => 1, 'alternative_id' => 3, 'reason' => 'Vegan optie'],

            // Alternatives for product ID 2
            ['product_id' => 2, 'alternative_id' => 1, 'reason' => 'Minder vet'],
            ['product_id' => 2, 'alternative_id' => 3, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 3
            ['product_id' => 3, 'alternative_id' => 1, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 3, 'alternative_id' => 2, 'reason' => 'Minder calorieën'],

            // Alternatives for product ID 4
            ['product_id' => 4, 'alternative_id' => 5, 'reason' => 'Vaker vanuit Nederland'],
            ['product_id' => 4, 'alternative_id' => 6, 'reason' => 'Altijd vanuit Nederland'],

            // Alternatives for product ID 5
            ['product_id' => 5, 'alternative_id' => 4, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 5, 'alternative_id' => 6, 'reason' => 'Minder pesticiden'],

            // Alternatives for product ID 6
            ['product_id' => 6, 'alternative_id' => 4, 'reason' => 'Lokaal geproduceerd'],
            ['product_id' => 6, 'alternative_id' => 5, 'reason' => 'Biologisch alternatief'],

            // Alternatives for product ID 7
            ['product_id' => 7, 'alternative_id' => 8, 'reason' => '2 beterleven sterren'],
            ['product_id' => 7, 'alternative_id' => 9, 'reason' => '3 beterleven sterren'],

            // Alternatives for product ID 8
            ['product_id' => 8, 'alternative_id' => 7, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 8, 'alternative_id' => 9, 'reason' => 'Minder vet'],

            // Alternatives for product ID 9
            ['product_id' => 9, 'alternative_id' => 7, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 9, 'alternative_id' => 8, 'reason' => 'Minder vet'],

            // Alternatives for product ID 10
            ['product_id' => 10, 'alternative_id' => 11, 'reason' => 'Biologisch en fairtrade'],
            ['product_id' => 10, 'alternative_id' => 12, 'reason' => 'Duurzamer type fruit'],

            // Alternatives for product ID 11
            ['product_id' => 11, 'alternative_id' => 10, 'reason' => 'Fairtrade alternatief'],
            ['product_id' => 11, 'alternative_id' => 12, 'reason' => 'Biologisch alternatief'],

            // Alternatives for product ID 12
            ['product_id' => 12, 'alternative_id' => 10, 'reason' => 'Fairtrade alternatief'],
            ['product_id' => 12, 'alternative_id' => 11, 'reason' => 'Biologisch alternatief'],

            // Alternatives for product ID 13
            ['product_id' => 13, 'alternative_id' => 14, 'reason' => 'Minder melk verbruik'],
            ['product_id' => 13, 'alternative_id' => 15, 'reason' => 'Biologische keuze'],

            // Alternatives for product ID 14
            ['product_id' => 14, 'alternative_id' => 13, 'reason' => 'Minder melk verbruik'],
            ['product_id' => 14, 'alternative_id' => 15, 'reason' => 'Biologische keuze'],

            // Alternatives for product ID 15
            ['product_id' => 15, 'alternative_id' => 13, 'reason' => 'Minder melk verbruik'],
            ['product_id' => 15, 'alternative_id' => 14, 'reason' => 'Biologische keuze'],

            // Alternatives for product ID 16
            ['product_id' => 16, 'alternative_id' => 17, 'reason' => 'Niet gekweekt'],
            ['product_id' => 16, 'alternative_id' => 18, 'reason' => 'Duurzamer type vis'],

            // Alternatives for product ID 17
            ['product_id' => 17, 'alternative_id' => 16, 'reason' => 'Niet gekweekt'],
            ['product_id' => 17, 'alternative_id' => 18, 'reason' => 'Duurzamer type vis'],

            // Alternatives for product ID 18
            ['product_id' => 18, 'alternative_id' => 16, 'reason' => 'Niet gekweekt'],
            ['product_id' => 18, 'alternative_id' => 17, 'reason' => 'Duurzamer type vis'],

            // Alternatives for product ID 19
            ['product_id' => 19, 'alternative_id' => 20, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 19, 'alternative_id' => 21, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 20
            ['product_id' => 20, 'alternative_id' => 19, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 20, 'alternative_id' => 21, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 21
            ['product_id' => 21, 'alternative_id' => 22, 'reason' => 'Minder verpakking'],
            ['product_id' => 21, 'alternative_id' => 23, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 22
            ['product_id' => 22, 'alternative_id' => 21, 'reason' => 'Minder verpakking'],
            ['product_id' => 22, 'alternative_id' => 23, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 23
            ['product_id' => 23, 'alternative_id' => 21, 'reason' => 'Minder verpakking'],
            ['product_id' => 23, 'alternative_id' => 22, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 24
            ['product_id' => 24, 'alternative_id' => 21, 'reason' => 'Minder verpakking'],
            ['product_id' => 24, 'alternative_id' => 22, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 25
            ['product_id' => 25, 'alternative_id' => 26, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 25, 'alternative_id' => 27, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 26
            ['product_id' => 26, 'alternative_id' => 25, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 26, 'alternative_id' => 27, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 27
            ['product_id' => 27, 'alternative_id' => 25, 'reason' => 'Biologisch alternatief'],
            ['product_id' => 27, 'alternative_id' => 26, 'reason' => 'Vegetarisch alternatief'],

            // Alternatives for product ID 28
            ['product_id' => 28, 'alternative_id' => 29, 'reason' => 'Minder verpakking'],
            ['product_id' => 28, 'alternative_id' => 30, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 29
            ['product_id' => 29, 'alternative_id' => 28, 'reason' => 'Minder verpakking'],
            ['product_id' => 29, 'alternative_id' => 30, 'reason' => 'Duurzamer alternatief'],

            // Alternatives for product ID 30
            ['product_id' => 30, 'alternative_id' => 28, 'reason' => 'Minder verpakking'],
            ['product_id' => 30, 'alternative_id' => 29, 'reason' => 'Duurzamer alternatief'],
        ];

        foreach ($alternatives as $alternative) {
            // Ensure the product_id and alternative_id exist in the products table
            if (Product::find($alternative['product_id']) && Product::find($alternative['alternative_id'])) {
                Product::find($alternative['product_id'])->alternatives()->attach($alternative['alternative_id'], ['reason' => $alternative['reason']]);
            }
        }
    }
}
