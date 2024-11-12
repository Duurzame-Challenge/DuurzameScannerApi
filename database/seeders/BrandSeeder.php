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
            ['name' => 'Albert Heijn'], // ID: 1
            ['name' => 'Jumbo'], // ID: 2
            ['name' => 'Vion'], // ID: 3
            ['name' => 'Kipster'], // ID: 4
            ['name' => 'De Vegetarische Slager'], // ID: 5
            // Vegetable Brands
            ['name' => 'Bonduelle'], // ID: 6
            ['name' => 'Hak'], // ID: 7
            ['name' => 'Ekoplaza'], // ID: 8
            ['name' => 'Greenyard'], // ID: 9
            ['name' => 'Nature\'s Pride'], // ID: 10
            // Fruit Brands
            ['name' => 'Chiquita'], // ID: 11
            ['name' => 'Dole'], // ID: 12
            ['name' => 'Zespri'], // ID: 13
            ['name' => 'Pink Lady'], // ID: 14
            ['name' => 'Driscoll\'s'], // ID: 15
            // Dairy Brands
            ['name' => 'Campina'], // ID: 16
            ['name' => 'Arla'], // ID: 17
            ['name' => 'Alpro'], // ID: 18
            ['name' => 'FrieslandCampina'], // ID: 19
            ['name' => 'Danone'], // ID: 20
            // Bread and Bakery Brands
            ['name' => 'Bakker Bart'], // ID: 21
            ['name' => 'Bolletje'], // ID: 22
            ['name' => 'Van der Meulen'], // ID: 23
            ['name' => 'Peijnenburg'], // ID: 24
            ['name' => 'Lotus'], // ID: 25
            // Beverage Brands
            ['name' => 'Coca-Cola'], // ID: 26
            ['name' => 'Pepsi'], // ID: 27
            ['name' => 'Heineken'], // ID: 28
            ['name' => 'Spa'], // ID: 29
            ['name' => 'Lipton'], // ID: 30
            // Snack Brands
            ['name' => 'Lay\'s'], // ID: 31
            ['name' => 'Doritos'], // ID: 32
            ['name' => 'Calvé'], // ID: 33
            ['name' => 'Unox'], // ID: 34
            ['name' => 'M&M\'s'], // ID: 35
            // Other Grocery Brands
            ['name' => 'Knorr'], // ID: 36
            ['name' => 'Maggi'], // ID: 37
            ['name' => 'Honig'], // ID: 38
            ['name' => 'Conimex'], // ID: 39
            ['name' => 'Blue Band'], // ID: 40
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}