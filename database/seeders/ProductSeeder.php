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
        $products = [
            // Groenten
            [
                'barcode' => '8718452050013',
                'name' => 'AH Runder Hamburger 2 stuks',
                'description' => 'Hamburgers gemaakt van mild gekruid rundvlees met een rulle structuur.',
                'price' => 3.19,
                'categorie_id' => 1,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 1
            [
                'barcode' => '8718452050020',
                'name' => 'AH Runder Kip burger 2 stuks',
                'description' => 'Hamburgers gemaakt van mild gekruid rundvlees en kip met een rulle structuur.',
                'price' => 2.99,
                'categorie_id' => 1, 
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 2
            [
                'barcode' => '8718452050181',
                'name' => 'AH Terra plantaardige burger 2 stuks',
                'description' => 'Deze luxe plantaardige burger kan niet ontbreken bij de zomerse BBQ! Serveer hem op een broodje met knapperige sla, tomaat en een zoetzure augurk.',
                'price' => 3.19,
                'categorie_id' => 1, 
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 3
            [
                'barcode' => '8718452050198',
                'name' => 'Jazz appels schaal',
                'description' => 'Zo’n knapperige, friszoete, sappige appel - dat kan alleen een JAZZ™ appel zijn!',
                'price' => 3.59,
                'categorie_id' => 13, 
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 4
            [
                'barcode' => '8718452050037',
                'name' => 'AH Biologisch Royal gala schaal',
                'description' => 'Royal Gala is een volzoete handappel met een toegankelijke smaak met tonen van nectarine, een echte allemansvriend en biologisch bovendien!',
                'price' => 2.69,
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 5
            [
                'barcode' => '8717163690012',
                'name' => 'AH Elstar schaal',
                'description' => 'Elstar is de meest gegeten appel van Nederland, Deze friszoete appel met fijn cassisaroma is een echte alleskunner. ',
                'price' => 2.19,
                'categorie_id' => 13,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 6
            [
                'barcode' => '8718452050204',
                'name' => 'AH Scharrel kipdijfilet',
                'description' => 'Deze scharrel kipdijfilet zijn van puur scharrel kippendijvlees waarvan het bot is verwijderd. Deze kipmedaillons zijn ook lekker voor op de barbecue.',
                'price' => 4.78,
                'categorie_id' => 2,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 7
            [
                'barcode' => '8718452050211',
                'name' => 'AH Franse scharrelkipfilet',
                'description' => 'De scharrelkipfilet is van Franse afkomst en heerlijk mals van smaak. Een veelzijdig stukje vlees waar je eindeloos mee kunt variëren.',
                'price' => 7.07,
                'categorie_id' => 2,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 8
            // Vis
            [
                'barcode' => '8718452050044',
                'name' => 'AH Biologisch Kipfilet 2 stuks',
                'description' => 'Deze malse kipfilet is 100% naturel en daarom geschikt om in veel gerechten te verwerken.',
                'price' => 8.99,
                'categorie_id' => 2,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 9
            [
                'barcode' => '8718452050051',
                'name' => 'AH Bananen tros',
                'description' => 'De banaan is de bekendste tropische fruitsoort en een echte favoriet.',
                'price' => 1.55,
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 10
            [
                'barcode' => '8718452050228',
                'name' => 'AH Biologisch Fairtrade bananen',
                'description' => 'Het favoriete fruit van Nederland. Deze bananen zijn Fairtrade en biologisch .',
                'price' => 2.19,
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 11
            [
                'barcode' => '8718452050235',
                'name' => 'AH Conference schaal',
                'description' => 'Conference is een sappige en veelzijdig peer. ',
                'price' => 2.19,
                'categorie_id' => 13, 
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 12
            // Varken
            [
                'barcode' => '8718452050068',
                'name' => 'AH Goudse jong belegen 48+ stuk',
                'description' => 'De lekkerste alledaagse Goudse kaas met een milde smaak. Gemaakt van 100% weidemelk.',
                'price' => 6.74,
                'categorie_id' => 11, 
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 13
            [
                'barcode' => '8718452050075',
                'name' => 'AH Italiaanse mozzarella',
                'description' => 'Italiaanse mozzarella gemaakt uit 100% koemelk.',
                'price' => 1.89,
                'categorie_id' => 11, 
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 14
            [
                'barcode' => '8718452050242',
                'name' => 'AH Biologisch Jong belegen 50+ stuk',
                'description' => 'AH biologische kaas wordt gemaakt van de lekkerste biologische koemelk, bereid met vegetarisch stremsel en heeft een mooie volle smaak',
                'price' => 6.72,
                'categorie_id' => 11,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 15
            [
                'barcode' => '8718452050259',
                'name' => 'AH Zalmfilet',
                'description' => 'Zalmfilet gekweekt in Noorwegen bij een gecertificeerde kweker.',
                'price' => 7.99,
                'categorie_id' => 5,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 16
            // Snoep
            [
                'barcode' => '8718452050082',
                'name' => 'AH Wilde zalmfilet',
                'description' => 'Wilde zalmfilet gevangen in de Stille Oceaan volgens de MSC-standaard.',
                'price' => 3.39,
                'categorie_id' => 5,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 17
            [
                'barcode' => '8718452050099',
                'name' => 'AH Kabeljauwhaasje 2 stuks',
                'description' => 'De kabeljauw is MSC-gecertificeerd en wordt gevangen in de Barentszzee waar het kabeljauwbestand het goed doet.',
                'price' => 7.99,
                'categorie_id' => 5,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 18
            [
                'barcode' => '8718452050266',
                'name' => 'AH Drop',
                'description' => 'Heerlijke drop van Albert Heijn.',
                'price' => 1.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 19
            [
                'barcode' => '8718452050273',
                'name' => 'AH Chocolade',
                'description' => 'Heerlijke chocolade van Albert Heijn.',
                'price' => 2.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 20
            // Soepen
            [
                'barcode' => '8718452050105',
                'name' => 'Unox Tomatensoep',
                'description' => 'Heerlijke tomatensoep van Unox.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 10, // Unox
                'user_id' => 1,
            ], // ID: 21
            [
                'barcode' => '8718452050112',
                'name' => 'Unox Groentesoep',
                'description' => 'Heerlijke groentesoep van Unox.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 10,
                'user_id' => 1,
            ], // ID: 22
            [
                'barcode' => '8718452050280',
                'name' => 'AH Kippensoep',
                'description' => 'Heerlijke kippensoep van Albert Heijn.',
                'price' => 2.99,
                'categorie_id' => 18, // Soepen
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 23
            [
                'barcode' => '8718452050297',
                'name' => 'AH Erwtensoep',
                'description' => 'Heerlijke erwtensoep van Albert Heijn.',
                'price' => 3.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 24
            // Alternatieve Producten
            [
                'barcode' => '8718452050129',
                'name' => 'AH Biologische Spinazie',
                'description' => 'Biologische spinazie van Albert Heijn.',
                'price' => 2.49,
                'categorie_id' => 6, // Bladgroenten
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 25
            [
                'barcode' => '8718452050136',
                'name' => 'Vega Kipfilet',
                'description' => 'Vegetarische kipfilet.',
                'price' => 4.99,
                'categorie_id' => 2, // Kip
                'brand_id' => 12, // VegaMerk
                'user_id' => 1,
            ], // ID: 26
            [
                'barcode' => '8718452050143',
                'name' => 'Eco Zalmfilet',
                'description' => 'Ecologische zalmfilet.',
                'price' => 14.99,
                'categorie_id' => 3, // Vis
                'brand_id' => 13, // EcoMerk
                'user_id' => 1,
            ], // ID: 27
            [
                'barcode' => '8718452050150',
                'name' => 'Diervriendelijke Varkenshaas',
                'description' => 'Diervriendelijke varkenshaas.',
                'price' => 11.99,
                'categorie_id' => 4, // Varkensvlees
                'brand_id' => 14, // DiervriendelijkMerk
                'user_id' => 1,
            ], // ID: 28
            [
                'barcode' => '8718452050167',
                'name' => 'Veganistische Gummy Bears',
                'description' => 'Veganistische gummy beertjes.',
                'price' => 2.49,
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 15, // VeganMerk
                'user_id' => 1,
            ], // ID: 29
            [
                'barcode' => '8718452050174',
                'name' => 'Biologische Tomatensoep',
                'description' => 'Biologische tomatensoep.',
                'price' => 4.49,
                'categorie_id' => 18, // Soepen
                'brand_id' => 16, // BioSoepMerk
                'user_id' => 1,
            ], // ID: 30
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}