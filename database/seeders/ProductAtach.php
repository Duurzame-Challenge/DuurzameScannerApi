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
                6 => [6],
                7 => [7],
                8 => [8],
                9 => [9],
                10 => [10],
                11 => [1, 4],
                12 => [2, 5],
                13 => [3, 6],
                14 => [7, 8],
                15 => [9, 10],
                16 => [1, 2],
                17 => [3, 4],
                18 => [5, 6],
                19 => [7, 8],
                20 => [9, 10],
                21 => [1, 3],
                22 => [2, 4],
                23 => [5, 7],
                24 => [6, 8],
                25 => [9, 1],
                26 => [2, 3],
                27 => [4, 5],
                28 => [6, 7],
                29 => [8, 9],
                30 => [10, 1],
                31 => [2, 3],
                32 => [4, 5],
                33 => [6, 7],
                34 => [8, 9],
            ];
            
            foreach ($products as $product) {
                $productId = $product->id;
                if (isset($productSustainabilities[$productId])) {
                    foreach ($productSustainabilities[$productId] as $sustainabilityId) {
                        // Check if the relationship already exists before attaching
                        if (!$product->sustainabilities()->wherePivot('sustainability_id', $sustainabilityId)->exists()) {
                            $product->sustainabilities()->attach($sustainabilityId);
                        }
                    }
                }
            }

            // Attach random allergens, avoiding duplicates
            $allergens = Allergen::inRandomOrder()->take(rand(1, 3))->pluck('id');
            foreach ($allergens as $allergenId) {
                if (!$product->allergens()->wherePivot('allergen_id', $allergenId)->exists()) {
                    $product->allergens()->attach($allergenId);
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
