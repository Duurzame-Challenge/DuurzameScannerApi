<?php
// database/seeders/BrandSeeder.php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            // Meat Brands
            ['name' => 'Albert Heijn'],
            ['name' => 'Jumbo'],
            ['name' => 'Vion'],
            ['name' => 'Kipster'],
            ['name' => 'De Vegetarische Slager'],
            // Vegetable Brands
            ['name' => 'Bonduelle'],
            ['name' => 'Hak'],
            ['name' => 'Ekoplaza'],
            ['name' => 'Greenyard'],
            ['name' => 'Nature\'s Pride'],
            // Fruit Brands
            ['name' => 'Chiquita'],
            ['name' => 'Dole'],
            ['name' => 'Zespri'],
            ['name' => 'Pink Lady'],
            ['name' => 'Driscoll\'s'],
            // Dairy Brands
            ['name' => 'Campina'],
            ['name' => 'Arla'],
            ['name' => 'Alpro'],
            ['name' => 'FrieslandCampina'],
            ['name' => 'Danone'],
            // Bread and Bakery Brands
            ['name' => 'Bakker Bart'],
            ['name' => 'Bolletje'],
            ['name' => 'Van der Meulen'],
            ['name' => 'Peijnenburg'],
            ['name' => 'Lotus'],
            // Beverage Brands
            ['name' => 'Coca-Cola'],
            ['name' => 'Pepsi'],
            ['name' => 'Heineken'],
            ['name' => 'Spa'],
            ['name' => 'Lipton'],
            // Snack Brands
            ['name' => 'Lay\'s'],
            ['name' => 'Doritos'],
            ['name' => 'Calvé'],
            ['name' => 'Unox'],
            ['name' => 'M&M\'s'],
            // Other Grocery Brands
            ['name' => 'Knorr'],
            ['name' => 'Maggi'],
            ['name' => 'Honig'],
            ['name' => 'Conimex'],
            ['name' => 'Blue Band'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
