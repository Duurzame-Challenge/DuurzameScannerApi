<?php
// database/seeders/CategorieSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // Meat Types
            [
                'name' => 'Rundvlees',
                'description' => 'Verschillende soorten rundvleesproducten.',
            ], // ID: 1
            [
                'name' => 'Kip',
                'description' => 'Verschillende soorten kipproducten.',
            ], // ID: 2
            [
                'name' => 'Varkensvlees',
                'description' => 'Verschillende soorten varkensvleesproducten.',
            ], // ID: 3
            [
                'name' => 'Lamsvlees',
                'description' => 'Verschillende soorten lamsvleesproducten.',
            ], // ID: 4
            [
                'name' => 'Vis',
                'description' => 'Verschillende soorten visproducten.',
            ], // ID: 5
            // Vegetable Types
            [
                'name' => 'Bladgroenten',
                'description' => 'Verschillende soorten bladgroenten zoals spinazie en sla.',
            ], // ID: 6
            [
                'name' => 'Koolsoorten',
                'description' => 'Verschillende soorten kool zoals bloemkool en broccoli.',
            ], // ID: 7
            [
                'name' => 'Wortelgroenten',
                'description' => 'Verschillende soorten wortelgroenten zoals wortels en bieten.',
            ], // ID: 8
            [
                'name' => 'Vruchtgroenten',
                'description' => 'Verschillende soorten vruchtgroenten zoals tomaten en paprika\'s.',
            ], // ID: 9
            [
                'name' => 'Peulvruchten',
                'description' => 'Verschillende soorten peulvruchten zoals bonen en erwten.',
            ], // ID: 10
            // Other Product Categories
            [
                'name' => 'Zuivelproducten',
                'description' => 'Verschillende soorten zuivelproducten zoals melk en kaas.',
            ], // ID: 11
            [
                'name' => 'Granen',
                'description' => 'Verschillende soorten granen zoals rijst en tarwe.',
            ], // ID: 12
            [
                'name' => 'Fruit',
                'description' => 'Verschillende soorten fruit zoals appels en bananen.',
            ], // ID: 13
            [
                'name' => 'Noten en Zaden',
                'description' => 'Verschillende soorten noten en zaden zoals amandelen en zonnebloempitten.',
            ], // ID: 14
            [
                'name' => 'Kruiden en Specerijen',
                'description' => 'Verschillende soorten kruiden en specerijen zoals basilicum en kaneel.',
            ], // ID: 15
            [
                'name' => 'Bakkerijproducten',
                'description' => 'Verschillende soorten bakkerijproducten zoals brood en gebak.',
            ], // ID: 16
            [
                'name' => 'Dranken',
                'description' => 'Verschillende soorten dranken zoals sap en koffie.',
            ], // ID: 17
            [
                'name' => 'Snoep en Snacks',
                'description' => 'Verschillende soorten snoep en snacks zoals chips en chocolade.',
            ], // ID: 18
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}