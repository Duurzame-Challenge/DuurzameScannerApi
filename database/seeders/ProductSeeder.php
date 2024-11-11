<?php
// database/seeders/ProductSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Alternative;
use App\Models\Sustainability;
use App\Models\Allergen;
use App\Models\Order;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Meat Products
            [
                'barcode' => '8718452050013',
                'name' => 'Albert Heijn Rundvlees',
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
            // Vegetable Products
            [
                'barcode' => '8718452050020',
                'name' => 'Bonduelle Spinazie',
                'description' => 'Verse spinazie van Bonduelle.',
                'price' => 2.99,
                'categorie_id' => 6, // Bladgroenten
                'brand_id' => 6, // Bonduelle
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050037',
                'name' => 'Hak Bloemkool',
                'description' => 'Verse bloemkool van Hak.',
                'price' => 3.49,
                'categorie_id' => 7, // Koolsoorten
                'brand_id' => 7, // Hak
                'user_id' => 1,
            ],
            // Fruit Products
            [
                'barcode' => '8718452050044',
                'name' => 'Chiquita Bananen',
                'description' => 'Verse bananen van Chiquita.',
                'price' => 1.99,
                'categorie_id' => 13, // Fruit
                'brand_id' => 11, // Chiquita
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050051',
                'name' => 'Pink Lady Appels',
                'description' => 'Verse appels van Pink Lady.',
                'price' => 3.99,
                'categorie_id' => 13, // Fruit
                'brand_id' => 14, // Pink Lady
                'user_id' => 1,
            ],
            // Dairy Products
            [
                'barcode' => '8718452050068',
                'name' => 'Campina Melk',
                'description' => 'Verse melk van Campina.',
                'price' => 1.49,
                'categorie_id' => 11, // Zuivelproducten
                'brand_id' => 16, // Campina
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050075',
                'name' => 'Alpro Sojamelk',
                'description' => 'Veganistische sojamelk van Alpro.',
                'price' => 2.49,
                'categorie_id' => 11, // Zuivelproducten
                'brand_id' => 18, // Alpro
                'user_id' => 1,
            ],
            // Bread and Bakery Products
            [
                'barcode' => '8718452050082',
                'name' => 'Bakker Bart Volkorenbrood',
                'description' => 'Vers volkorenbrood van Bakker Bart.',
                'price' => 2.99,
                'categorie_id' => 15, // Bakkerijproducten
                'brand_id' => 21, // Bakker Bart
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050099',
                'name' => 'Bolletje Ontbijtkoek',
                'description' => 'Heerlijke ontbijtkoek van Bolletje.',
                'price' => 1.99,
                'categorie_id' => 15, // Bakkerijproducten
                'brand_id' => 22, // Bolletje
                'user_id' => 1,
            ],
            // Beverage Products
            [
                'barcode' => '8718452050105',
                'name' => 'Coca-Cola Frisdrank',
                'description' => 'Verfrissende frisdrank van Coca-Cola.',
                'price' => 1.49,
                'categorie_id' => 16, // Dranken
                'brand_id' => 27, // Coca-Cola
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050112',
                'name' => 'Lipton Ice Tea',
                'description' => 'Verfrissende ice tea van Lipton.',
                'price' => 1.99,
                'categorie_id' => 16, // Dranken
                'brand_id' => 31, // Lipton
                'user_id' => 1,
            ],
            // Snack Products
            [
                'barcode' => '8718452050129',
                'name' => 'Lay\'s Paprika Chips',
                'description' => 'Heerlijke paprika chips van Lay\'s.',
                'price' => 1.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 36, // Lay's
                'user_id' => 1,
            ],
            [
                'barcode' => '8718452050136',
                'name' => 'Doritos Nacho Cheese',
                'description' => 'Heerlijke nacho cheese chips van Doritos.',
                'price' => 1.99,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 37, // Doritos
                'user_id' => 1,
            ],
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
