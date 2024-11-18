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
                1 => [1, 2], // AH Runder Hamburger 2 stuks - Duurzaam
                2 => [2], // AH Runder Kip burger 2 stuks - Duurzaam
                3 => [1, 3], // AH Terra plantaardige burger 2 stuks - Duurzaam
                4 => [], // Jazz appels schaal - Duurzaam
                5 => [5], // AH Biologisch Royal gala schaal - Duurzaam
                6 => [6, 10, 4], // AH Elstar schaal - Duurzaam
                7 => [], // AH Scharrel kipdijfilet - Duurzaam
                8 => [8], // AH Franse scharrelkipfilet - Duurzaam
                9 => [9], // AH Biologisch Kipfilet 2 stuks - Duurzaam
                10 => [], // AH Bananen tros - Duurzaam
                11 => [1, 4], // AH Biologisch Fairtrade bananen - Duurzaam
                12 => [2, 5], // AH Conference schaal - Duurzaam
                14 => [7, 8], // AH Goudse jong belegen 48+ stuk - Duurzaam
                15 => [9, 10, 2], // AH Italiaanse mozzarella - Duurzaam
                17 => [], // AH Zalmfilet - Duurzaam
                18 => [5], // AH Wilde zalmfilet - Duurzaam
                19 => [7, 8], // AH Kabeljauwhaasje 2 stuks - Duurzaam
                20 => [9, 10], // AH Drop - Duurzaam
                21 => [1, 5, 2, 6], // AH Chocolade - Duurzaam
                23 => [], // Unox Tomatensoep - Duurzaam
                24 => [6, 8], // Unox Groentesoep - Duurzaam
                25 => [9, 1], // AH Kippensoep - Duurzaam
                28 => [], // AH Erwtensoep - Duurzaam
                29 => [8, 9], // AH Biologische Spinazie - Duurzaam
                30 => [10, 1], // Vega Kipfilet - Duurzaam
                32 => [4, 5], // Eco Zalmfilet - Duurzaam
                33 => [6, 7], // Diervriendelijke Varkenshaas - Duurzaam
                34 => [8, 9], // Veganistische Gummy Bears - Duurzaam
                35 => [10, 1], // Biologische Tomatensoep - Duurzaam
                36 => [2, 3], // AH Lamskotelet - Duurzaam
                37 => [4, 5], // AH Bloemkool - Duurzaam
                38 => [6, 7], // AH Paprika Mix - Duurzaam
                39 => [8, 9], // AH Sinaasappelsap - Duurzaam
                40 => [10, 1], // AH Chocolade Melk - Duurzaam
                41 => [2, 3], // AH Aardbeien - Duurzaam
                42 => [4, 5], // AH Kipfilet - Duurzaam
                43 => [6, 7], // AH Zalmfilet - Duurzaam
                44 => [8, 9], // AH Kabeljauwfilet - Duurzaam
                45 => [10, 1], // AH Chocolade Reep - Duurzaam
                46 => [], // AH Chips Paprika - Duurzaam
                47 => [4, 5], // Pepsi Cola - Duurzaam
                48 => [6, 7], // Heineken Bier - Duurzaam
                49 => [8, 9], // Spa Blauw - Duurzaam
                50 => [10, 1], // Lipton Ice Tea - Duurzaam
                51 => [2, 3], // Lay's Naturel Chips - Duurzaam
                52 => [4, 5], // Doritos Nacho Cheese - Duurzaam
                53 => [6, 7], // Calvé Pindakaas - Duurzaam
                54 => [8, 9], // Unox Rookworst - Duurzaam
                55 => [10, 1], // M&M's Pinda - Duurzaam
                56 => [], // Niet duurzaam
                57 => [], // Niet duurzaam
                58 => [], // Niet duurzaam
                59 => [], // Niet duurzaam
                60 => [], // Niet duurzaam
            ];

            foreach ($productSustainabilities as $productId => $sustainabilityIds) {
                $product = Product::find($productId);
                if ($product) {
                    foreach ($sustainabilityIds as $sustainabilityId) {
                        if (!$product->sustainabilities()->wherePivot('sustainability_id', $sustainabilityId)->exists()) {
                            $product->sustainabilities()->attach($sustainabilityId);
                        }
                    }
                }
            }

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
