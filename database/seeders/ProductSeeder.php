<?php
// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Groenten
            [
                'barcode' => '8718452050013',
                'name' => 'AH Spinazie',
                'description' => 'Verse spinazie van Albert Heijn.',
                'price' => 1.99,
                'categorie_id' => 6, // Bladgroenten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050020',
                'name' => 'Hak Bloemkool',
                'description' => 'Verse bloemkool van Hak.',
                'price' => 2.49,
                'categorie_id' => 7, // Koolsoorten
                'brand_id' => 7, // Hak
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050181',
                'name' => 'AH Broccoli',
                'description' => 'Verse broccoli van Albert Heijn.',
                'price' => 1.79,
                'categorie_id' => 7, // Koolsoorten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050198',
                'name' => 'AH Wortelen',
                'description' => 'Verse wortelen van Albert Heijn.',
                'price' => 1.29,
                'categorie_id' => 6, // Bladgroenten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            // Vlees
            [
                'barcode' => '8718452050037',
                'name' => 'AH Rundvlees',
                'description' => 'Vers rundvlees van Albert Heijn.',
                'price' => 10.99,
                'categorie_id' => 1, // Rundvlees
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8717163690012',
                'name' => 'Jumbo Kipfilet',
                'description' => 'Verse kipfilet van Jumbo.',
                'price' => 5.49,
                'categorie_id' => 2, // Kip
                'brand_id' => 2, // Jumbo
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050204',
                'name' => 'AH Gehakt',
                'description' => 'Vers gehakt van Albert Heijn.',
                'price' => 4.99,
                'categorie_id' => 1, // Rundvlees
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050211',
                'name' => 'AH Biefstuk',
                'description' => 'Verse biefstuk van Albert Heijn.',
                'price' => 12.99,
                'categorie_id' => 1, // Rundvlees
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            // Vis
            [
                'barcode' => '8718452050044',
                'name' => 'AH Visfilet',
                'description' => 'Verse visfilet van Albert Heijn.',
                'price' => 8.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050051',
                'name' => 'AH Zalmfilet',
                'description' => 'Verse zalmfilet van Albert Heijn.',
                'price' => 12.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050228',
                'name' => 'AH Kabeljauwfilet',
                'description' => 'Verse kabeljauwfilet van Albert Heijn.',
                'price' => 14.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050235',
                'name' => 'AH Tonijnsteak',
                'description' => 'Verse tonijnsteak van Albert Heijn.',
                'price' => 16.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            // Varken
            [
                'barcode' => '8718452050068',
                'name' => 'AH Varkenshaas',
                'description' => 'Verse varkenshaas van Albert Heijn.',
                'price' => 9.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050075',
                'name' => 'AH Speklapjes',
                'description' => 'Verse speklapjes van Albert Heijn.',
                'price' => 6.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 1,
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050242',
                'name' => 'AH Varkensfilet',
                'description' => 'Verse varkensfilet van Albert Heijn.',
                'price' => 8.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 1,
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050259',
                'name' => 'AH Varkensribbetjes',
                'description' => 'Verse varkensribbetjes van Albert Heijn.',
                'price' => 7.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 1,
                'user_id' => 1,
            ],
            // Snoep
            [
                'barcode' => '8718452050082',
                'name' => 'Haribo Gummy Bears',
                'description' => 'Heerlijke gummy beertjes van Haribo.',
                'price' => 1.99,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 8, // Haribo
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050099',
                'name' => 'M&M\'s',
                'description' => 'Heerlijke M&M\'s.',
                'price' => 2.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 9, // M&M's
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050266',
                'name' => 'AH Drop',
                'description' => 'Heerlijke drop van Albert Heijn.',
                'price' => 1.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050273',
                'name' => 'AH Chocolade',
                'description' => 'Heerlijke chocolade van Albert Heijn.',
                'price' => 2.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ],
            // Soepen
            [
                'barcode' => '8718452050105',
                'name' => 'Unox Tomatensoep',
                'description' => 'Heerlijke tomatensoep van Unox.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 10, // Unox
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050112',
                'name' => 'Unox Groentesoep',
                'description' => 'Heerlijke groentesoep van Unox.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 10,
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050280',
                'name' => 'AH Kippensoep',
                'description' => 'Heerlijke kippensoep van Albert Heijn.',
                'price' => 2.99,
                'categorie_id' => 18, // Soepen
                'brand_id' => 1,
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050297',
                'name' => 'AH Erwtensoep',
                'description' => 'Heerlijke erwtensoep van Albert Heijn.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 1,
                'user_id' => 1,
            ],
            // Alternatieve Producten
            [
                'barcode' => '8718452050129',
                'name' => 'AH Biologische Spinazie',
                'description' => 'Biologische spinazie van Albert Heijn.',
                'price' => 2.49,
                'categorie_id' => 6, // Bladgroenten
                'brand_id' => 1,
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050136',
                'name' => 'Vega Kipfilet',
                'description' => 'Vegetarische kipfilet.',
                'price' => 4.99,
                'categorie_id' => 2, // Kip
                'brand_id' => 12, // VegaMerk
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050143',
                'name' => 'Eco Zalmfilet',
                'description' => 'Ecologische zalmfilet.',
                'price' => 14.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 13, // EcoMerk
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050150',
                'name' => 'Diervriendelijke Varkenshaas',
                'description' => 'Diervriendelijke varkenshaas.',
                'price' => 11.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 14, // DiervriendelijkMerk
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050167',
                'name' => 'Veganistische Gummy Bears',
                'description' => 'Veganistische gummy beertjes.',
                'price' => 2.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 15, // VeganMerk
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050174',
                'name' => 'Biologische Tomatensoep',
                'description' => 'Biologische tomatensoep.',
                'price' => 4.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 16, // BioSoepMerk
                'user_id' => 1,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
