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
        Product::create([
            'barcode' => '1234567890123',
            'name' => 'Sample Product 1',
            'description' => 'This is a sample product.',
            'price' => 99.99,
            'categorie_id' => 1,
            'brand_id' => 1,
            'user_id' => 1,
        ]);

        Product::create([
            'barcode' => '1234567890124',
            'name' => 'Sample Product 2',
            'description' => 'This is another sample product.',
            'price' => 199.99,
            'categorie_id' => 1,
            'brand_id' => 1,
            'user_id' => 1,
        ]);

        // Add more sample products as needed
    }
}
