<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Alternative;
use App\Models\Sustainability;
use App\Models\Allergen;
use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductAtach extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = Product::all();

        foreach ($products as $product) {
            // Specificeer de duurzaamheidsscores voor elk product
            $productSustainabilities = [
                1 => [1, 2],
                2 => [2, 3],
                3 => [1, 3],
                4 => [4],
                5 => [5],
                6 => [6, 10],
                7 => [7],
                8 => [8],
                9 => [9],
                10 => [10],
                11 => [1, 4],
                12 => [2, 5],
                14 => [7, 8],
                15 => [9, 10, 2],
                17 => [3, 4],
                18 => [5, 6],
                19 => [7, 8],
                20 => [9, 10],
                21 => [1, 5],
                23 => [5, 7],
                24 => [6, 8],
                25 => [9, 1],
                28 => [6, 7],
                29 => [8, 9],
                30 => [10, 1],
                32 => [4, 5],
                33 => [6, 7],
                34 => [8, 9],
                35 => [10, 1],
                36 => [2, 3],
                37 => [4, 5],
                38 => [6, 7],
                39 => [8, 9],
                40 => [10, 1],
                41 => [2, 3],
                42 => [4, 5],
                43 => [6, 7],
                44 => [8, 9],
                45 => [10, 1],
                46 => [2, 3],
                47 => [4, 5],
                48 => [6, 7],
                49 => [8, 9],
                50 => [10, 1],
                51 => [2, 3],
                52 => [4, 5],
                53 => [6, 7],
                54 => [8, 9],
                55 => [10, 1],
                56 => [2, 3],
                57 => [4, 5],
                58 => [6, 7],
                59 => [8, 9],
                60 => [10, 1],
            ];

            $productAllergens = [
                1 => [5], // AH Runder Hamburger 2 stuks - Wheat
                2 => [5], // AH Runder Kip burger 2 stuks - Wheat
                3 => [6], // AH Terra plantaardige burger 2 stuks - Soy
                4 => [], // Jazz appels schaal - No common allergens
                5 => [], // AH Biologisch Royal gala schaal - No common allergens
                6 => [], // AH Elstar schaal - No common allergens
                7 => [], // AH Scharrel kipdijfilet - No common allergens
                8 => [], // AH Franse scharrelkipfilet - No common allergens
                9 => [], // AH Biologisch Kipfilet 2 stuks - No common allergens
                10 => [], // AH Bananen tros - No common allergens
                11 => [], // AH Biologisch Fairtrade bananen - No common allergens
                12 => [], // AH Conference schaal - No common allergens
                13 => [3], // AH Goudse jong belegen 48+ stuk - Milk
                14 => [3], // AH Italiaanse mozzarella - Milk
                15 => [3], // AH Biologisch Jong belegen 50+ stuk - Milk
                16 => [7], // AH Zalmfilet - Fish
                17 => [7], // AH Wilde zalmfilet - Fish
                18 => [7], // AH Kabeljauwhaasje 2 stuks - Fish
                19 => [1], // AH Drop - Peanuts
                20 => [1, 3], // AH Chocolade - Peanuts, Milk
                21 => [5], // Unox Tomatensoep - Wheat
                22 => [5], // Unox Groentesoep - Wheat
                23 => [5], // AH Kippensoep - Wheat
                24 => [5], // AH Erwtensoep - Wheat
                25 => [], // AH Biologische Spinazie - No common allergens
                26 => [6], // Vega Kipfilet - Soy
                27 => [7], // Eco Zalmfilet - Fish
                28 => [], // Diervriendelijke Varkenshaas - No common allergens
                29 => [], // Veganistische Gummy Bears - No common allergens
                30 => [5], // Biologische Tomatensoep - Wheat
                31 => [], // AH Lamskotelet - No common allergens
                32 => [], // AH Bloemkool - No common allergens
                33 => [], // AH Paprika Mix - No common allergens
                34 => [], // AH Sinaasappelsap - No common allergens
                35 => [3], // AH Chocolade Melk - Milk
                36 => [], // AH Aardbeien - No common allergens
                37 => [], // AH Kipfilet - No common allergens
                38 => [7], // AH Zalmfilet - Fish
                39 => [7], // AH Kabeljauwfilet - Fish
                40 => [1, 3], // AH Chocolade Reep - Peanuts, Milk
                41 => [], // AH Chips Paprika - No common allergens
                42 => [], // Pepsi Cola - No common allergens
                43 => [], // Heineken Bier - No common allergens
                44 => [], // Spa Blauw - No common allergens
                45 => [], // Lipton Ice Tea - No common allergens
                46 => [5], // Lay's Naturel Chips - Wheat
                47 => [5], // Doritos Nacho Cheese - Wheat
                48 => [1], // Calvé Pindakaas - Peanuts
                49 => [], // Unox Rookworst - No common allergens
                50 => [1], // M&M's Pinda - Peanuts
                51 => [5], // Knorr Wereldgerechten - Wheat
                52 => [5], // Maggi Bouillonblokjes - Wheat
                53 => [5], // Honig Soepmix - Wheat
                54 => [5], // Conimex Woksaus - Wheat
                55 => [3], // Blue Band Margarine - Milk
            ];

            foreach ($productAllergens as $productId => $allergenIds) {
                $product = Product::find($productId);
                if ($product) {
                    foreach ($allergenIds as $allergenId) {
                        if (!$product->allergens()->wherePivot('allergen_id', $allergenId)->exists()) {
                            $product->allergens()->attach($allergenId);
                        }
                    }
                }
            }




            // Attach random orders, avoiding duplicates
            $orders = Order::inRandomOrder()->take(rand(1, 3))->pluck('id');
            foreach ($orders as $orderId) {
                if (!$product->orders()->wherePivot('order_id', $orderId)->exists()) {
                    $product->orders()->attach($orderId);
                }
            }

            // Remove the random attachment of alternatives
            // $alternatives = Alternative::all()->pluck('id')->except($product->id);
            // foreach ($alternatives as $alternativeId) {
            //     if (!$product->alternatives()->wherePivot('alternative_id', $alternativeId)->exists()) {
            //         $product->alternatives()->attach($alternativeId);
            //     }
            // }
        }
    }
}
