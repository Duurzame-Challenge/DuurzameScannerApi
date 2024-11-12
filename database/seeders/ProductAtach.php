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
            // Attach random sustainabilities, avoiding duplicates
            $sustainabilities = Sustainability::inRandomOrder()->take(rand(1, 3))->pluck('id');
            foreach ($sustainabilities as $sustainabilityId) {
                // Check if the relationship already exists before attaching
                if (!$product->sustainabilities()->wherePivot('sustainability_id', $sustainabilityId)->exists()) {
                    $product->sustainabilities()->attach($sustainabilityId);
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

            // Attach random alternatives, avoiding duplicates
            $alternatives = Alternative::all()->pluck('id')->except($product->id);
            foreach ($alternatives as $alternativeId) {
                if (!$product->alternatives()->wherePivot('alternative_id', $alternativeId)->exists()) {
                    $product->alternatives()->attach($alternativeId);
                }
            }
        }
    }
}
