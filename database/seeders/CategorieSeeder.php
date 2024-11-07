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
            ],
            [
                'name' => 'Kip',
                'description' => 'Verschillende soorten kipproducten.',
            ],
            [
                'name' => 'Varkensvlees',
                'description' => 'Verschillende soorten varkensvleesproducten.',
            ],
            [
                'name' => 'Lamsvlees',
                'description' => 'Verschillende soorten lamsvleesproducten.',
            ],
            [
                'name' => 'Vis',
                'description' => 'Verschillende soorten visproducten.',
            ],
            // Vegetable Types
            [
                'name' => 'Bladgroenten',
                'description' => 'Verschillende soorten bladgroenten zoals spinazie en sla.',
            ],
            [
                'name' => 'Koolsoorten',
                'description' => 'Verschillende soorten kool zoals bloemkool en broccoli.',
            ],
            [
                'name' => 'Wortelgroenten',
                'description' => 'Verschillende soorten wortelgroenten zoals wortels en bieten.',
            ],
            [
                'name' => 'Vruchtgroenten',
                'description' => 'Verschillende soorten vruchtgroenten zoals tomaten en paprika\'s.',
            ],
            [
                'name' => 'Peulvruchten',
                'description' => 'Verschillende soorten peulvruchten zoals bonen en erwten.',
            ],
            // Other Product Categories
            [
                'name' => 'Zuivelproducten',
                'description' => 'Verschillende soorten zuivelproducten zoals melk en kaas.',
            ],
            [
                'name' => 'Granen',
                'description' => 'Verschillende soorten granen zoals rijst en tarwe.',
            ],
            [
                'name' => 'Fruit',
                'description' => 'Verschillende soorten fruit zoals appels en bananen.',
            ],
            [
                'name' => 'Noten en Zaden',
                'description' => 'Verschillende soorten noten en zaden zoals amandelen en zonnebloempitten.',
            ],
            [
                'name' => 'Kruiden en Specerijen',
                'description' => 'Verschillende soorten kruiden en specerijen zoals basilicum en kaneel.',
            ],
            [
                'name' => 'Bakkerijproducten',
                'description' => 'Verschillende soorten bakkerijproducten zoals brood en gebak.',
            ],
            [
                'name' => 'Dranken',
                'description' => 'Verschillende soorten dranken zoals sap en koffie.',
            ],
            [
                'name' => 'Snoep en Snacks',
                'description' => 'Verschillende soorten snoep en snacks zoals chips en chocolade.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
