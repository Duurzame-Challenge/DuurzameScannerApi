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
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 1,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 1
            [
                'barcode' => '8718452050020',
                'name' => 'AH Runder Kip burger 2 stuks',
                'description' => 'Hamburgers gemaakt van mild gekruid rundvlees en kip met een rulle structuur.',
                'price' => 2.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363936?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 1,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 2
            [
                'barcode' => '8718452050181',
                'name' => 'AH Terra plantaardige burger 2 stuks',
                'description' => 'Plantaardige burgers gemaakt van veldbonen uit Nederland.',
                'price' => 2.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130313032343736?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 1,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 3
            [
                'barcode' => '8718452050198',
                'name' => 'Jazz appels schaal',
                'description' => 'Zo’n knapperige, friszoete, sappige appel - dat kan alleen een JAZZ™ appel zijn!',
                'price' => 3.59,
                'image' => 'https://static.ah.nl/dam/product/AHI_43545239353936353632?revLabel=8&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 4
            [
                'barcode' => '8718452050037',
                'name' => 'AH Biologisch Royal gala schaal',
                'description' => 'Royal Gala is een volzoete handappel met een toegankelijke smaak met tonen van nectarine, een echte allemansvriend en biologisch bovendien!',
                'price' => 2.69,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130313031313931?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 5
            [
                'barcode' => '8717163690012',
                'name' => 'AH Elstar schaal',
                'description' => 'Elstar is de meest gegeten appel van Nederland, Deze friszoete appel met fijn cassisaroma is een echte alleskunner. ',
                'price' => 2.19,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130313031373033?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 13,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 6
            [
                'barcode' => '8718452050204',
                'name' => 'AH Scharrel kipdijfilet',
                'description' => 'Deze scharrel kipdijfilet zijn van puur scharrel kippendijvlees waarvan het bot is verwijderd. Deze kipmedaillons zijn ook lekker voor op de barbecue.',
                'price' => 4.78,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303938303136?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 2,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 7
            [
                'barcode' => '8718452050211',
                'name' => 'AH Franse scharrelkipfilet',
                'description' => 'De scharrelkipfilet is van Franse afkomst en heerlijk mals van smaak. Een veelzijdig stukje vlees waar je eindeloos mee kunt variëren.',
                'price' => 7.07,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303938303430?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
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
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303938303335?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 2,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 9
            [
                'barcode' => '8718452050051',
                'name' => 'AH Bananen tros',
                'description' => 'De banaan is de bekendste tropische fruitsoort en een echte favoriet.',
                'price' => 1.55,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303537313135?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 10
            [
                'barcode' => '8718452050228',
                'name' => 'AH Biologisch Fairtrade bananen',
                'description' => 'Het favoriete fruit van Nederland. Deze bananen zijn Fairtrade en biologisch .',
                'price' => 2.19,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303732383933?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 13,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 11
            [
                'barcode' => '8718452050235',
                'name' => 'AH Conference schaal',
                'description' => 'Conference is een sappige en veelzijdig peer. ',
                'price' => 2.19,
                'image' => 'https://static.ah.nl/dam/product/AHI_43545239383735353736?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
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
                'image' => 'https://static.ah.nl/dam/product/AHI_43545239363339303935?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 11,
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 13
            [
                'barcode' => '8718452050075',
                'name' => 'AH Italiaanse mozzarella',
                'description' => 'Italiaanse mozzarella gemaakt uit 100% koemelk.',
                'price' => 1.89,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303638323839?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 11,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 14
            [
                'barcode' => '8718452050242',
                'name' => 'AH Biologisch Jong belegen 50+ stuk',
                'description' => 'AH biologische kaas wordt gemaakt van de lekkerste biologische koemelk, bereid met vegetarisch stremsel en heeft een mooie volle smaak',
                'price' => 6.72,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303132313431?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 11,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 15
            [
                'barcode' => '8718452050259',
                'name' => 'AH Zalmfilet',
                'description' => 'Zalmfilet gekweekt in Noorwegen bij een gecertificeerde kweker.',
                'price' => 5.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303938303038?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
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
                'image' => 'https://static.ah.nl/dam/product/AHI_43545239373431313436?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'categorie_id' => 5,
                'brand_id' => 1,
                'user_id' => 1,
            ], // ID: 17
            [
                'barcode' => '8718452050099',
                'name' => 'AH Kabeljauwhaasje 2 stuks',
                'description' => 'De kabeljauw is MSC-gecertificeerd en wordt gevangen in de Barentszzee waar het kabeljauwbestand het goed doet.',
                'price' => 7.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130313036303831?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
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
            // New products
            [
                'barcode' => '8718452050310',
                'name' => 'AH Lamskotelet',
                'description' => 'Lamskotelet van hoge kwaliteit, perfect voor grillen of bakken.',
                'price' => 12.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 4, // Lamsvlees
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 31
            [
                'barcode' => '8718452050327',
                'name' => 'AH Bloemkool',
                'description' => 'Verse bloemkool, ideaal voor diverse gerechten.',
                'price' => 1.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 7, // Koolsoorten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 32
            [
                'barcode' => '8718452050334',
                'name' => 'AH Paprika Mix',
                'description' => 'Mix van rode, gele en groene paprika\'s, rijk aan vitamines.',
                'price' => 2.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 8, // Vruchtengroenten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 33
            [
                'barcode' => '8718452050341',
                'name' => 'AH Sinaasappelsap',
                'description' => 'Versgeperste sinaasappelsap, zonder toegevoegde suikers.',
                'price' => 2.49,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 17, // Dranken
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 34
            [
                'barcode' => '8718452050358',
                'name' => 'AH Chocolade Melk',
                'description' => 'Heerlijke romige chocolademelk, perfect voor koude dagen.',
                'price' => 1.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 17, // Dranken
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 35
            [
                'barcode' => '8718452050365',
                'name' => 'AH Aardbeien',
                'description' => 'Verse, sappige aardbeien, perfect voor desserts en salades.',
                'price' => 3.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 13, // Vruchtengroenten
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 36
            [
                'barcode' => '8718452050372',
                'name' => 'AH Kipfilet',
                'description' => 'Malse kipfilet, ideaal voor diverse gerechten.',
                'price' => 5.49,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 2, // Kip
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 37
            [
                'barcode' => '8718452050389',
                'name' => 'AH Zalmfilet',
                'description' => 'Verse zalmfilet, rijk aan omega-3 vetzuren.',
                'price' => 7.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 5, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 38
            [
                'barcode' => '8718452050396',
                'name' => 'AH Kabeljauwfilet',
                'description' => 'Verse kabeljauwfilet, perfect voor bakken of grillen.',
                'price' => 6.99,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 5, // Vis
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 39
            [
                'barcode' => '8718452050402',
                'name' => 'AH Chocolade Reep',
                'description' => 'Heerlijke melkchocolade reep, perfect als tussendoortje.',
                'price' => 1.49,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 40
            [
                'barcode' => '8718452050419',
                'name' => 'AH Chips Paprika',
                'description' => 'Knapperige chips met paprikasmaak, perfect voor feestjes.',
                'price' => 1.29,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 41
            [
                'barcode' => '8718452050419',
                'name' => 'AH Chips Paprika',
                'description' => 'Knapperige chips met paprikasmaak, perfect voor feestjes.',
                'price' => 1.29,
                'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 1, // Albert Heijn
                'user_id' => 1,
            ], // ID: 41

            // New products
            [
                'barcode' => '8718452050426',
                'name' => 'Pepsi Cola',
                'description' => 'Verfrissende Pepsi Cola, perfect voor elke gelegenheid.',
                'price' => 1.49,
                'image' => 'https://via.placeholder.com/800x800.png?text=Pepsi+Cola',
                'categorie_id' => 17, // Dranken
                'brand_id' => 27, // Pepsi
                'user_id' => 1,
            ], // ID: 42
            [
                'barcode' => '8718452050433',
                'name' => 'Heineken Bier',
                'description' => 'Heerlijk verfrissend Heineken bier, perfect voor feestjes.',
                'price' => 2.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Heineken+Bier',
                'categorie_id' => 17, // Dranken
                'brand_id' => 28, // Heineken
                'user_id' => 1,
            ], // ID: 43
            [
                'barcode' => '8718452050440',
                'name' => 'Spa Blauw',
                'description' => 'Verfrissend mineraalwater van Spa, perfect voor elke dag.',
                'price' => 0.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Spa+Blauw',
                'categorie_id' => 17, // Dranken
                'brand_id' => 29, // Spa
                'user_id' => 1,
            ], // ID: 44
            [
                'barcode' => '8718452050457',
                'name' => 'Lipton Ice Tea',
                'description' => 'Verfrissende Lipton Ice Tea, perfect voor warme dagen.',
                'price' => 1.79,
                'image' => 'https://via.placeholder.com/800x800.png?text=Lipton+Ice+Tea',
                'categorie_id' => 17, // Dranken
                'brand_id' => 30, // Lipton
                'user_id' => 1,
            ], // ID: 45
            [
                'barcode' => '8718452050464',
                'name' => 'Lay\'s Naturel Chips',
                'description' => 'Heerlijke knapperige Lay\'s chips met een natuurlijke smaak.',
                'price' => 1.49,
                'image' => 'https://via.placeholder.com/800x800.png?text=Lay%27s+Naturel+Chips',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 31, // Lay's
                'user_id' => 1,
            ], // ID: 46
            [
                'barcode' => '8718452050471',
                'name' => 'Doritos Nacho Cheese',
                'description' => 'Heerlijke Doritos chips met een nacho cheese smaak.',
                'price' => 1.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Doritos+Nacho+Cheese',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 32, // Doritos
                'user_id' => 1,
            ], // ID: 47
            [
                'barcode' => '8718452050488',
                'name' => 'Calvé Pindakaas',
                'description' => 'Heerlijke romige Calvé pindakaas, perfect voor op brood.',
                'price' => 2.49,
                'image' => 'https://via.placeholder.com/800x800.png?text=Calv%C3%A9+Pindakaas',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 33, // Calvé
                'user_id' => 1,
            ], // ID: 48
            [
                'barcode' => '8718452050495',
                'name' => 'Unox Rookworst',
                'description' => 'Heerlijke Unox rookworst, perfect voor stamppot.',
                'price' => 3.49,
                'image' => 'https://via.placeholder.com/800x800.png?text=Unox+Rookworst',
                'categorie_id' => 1, // Vlees
                'brand_id' => 34, // Unox
                'user_id' => 1,
            ], // ID: 49
            [
                'barcode' => '8718452050501',
                'name' => 'M&M\'s Pinda',
                'description' => 'Heerlijke M&M\'s met een knapperige pindavulling.',
                'price' => 2.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=M%26M%27s+Pinda',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 35, // M&M's
                'user_id' => 1,
            ], // ID: 50
            [
                'barcode' => '8718452050518',
                'name' => 'Knorr Wereldgerechten',
                'description' => 'Heerlijke Knorr wereldgerechten, makkelijk te bereiden.',
                'price' => 4.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Knorr+Wereldgerechten',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 36, // Knorr
                'user_id' => 1,
            ], // ID: 51
            [
                'barcode' => '8718452050525',
                'name' => 'Maggi Bouillonblokjes',
                'description' => 'Heerlijke Maggi bouillonblokjes, perfect voor soepen en sauzen.',
                'price' => 1.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Maggi+Bouillonblokjes',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 37, // Maggi
                'user_id' => 1,
            ], // ID: 52
            [
                'barcode' => '8718452050532',
                'name' => 'Honig Soepmix',
                'description' => 'Heerlijke Honig soepmix, makkelijk te bereiden.',
                'price' => 2.49,
                'image' => 'https://via.placeholder.com/800x800.png?text=Honig+Soepmix',
                'categorie_id' => 18, // Soepen
                'brand_id' => 38, // Honig
                'user_id' => 1,
            ], // ID: 53
            [
                'barcode' => '8718452050549',
                'name' => 'Conimex Woksaus',
                'description' => 'Heerlijke Conimex woksaus, perfect voor Aziatische gerechten.',
                'price' => 2.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Conimex+Woksaus',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 39, // Conimex
                'user_id' => 1,
            ], // ID: 54
            [
                'barcode' => '8718452050556',
                'name' => 'Blue Band Margarine',
                'description' => 'Heerlijke romige Blue Band margarine, perfect voor bakken en braden.',
                'price' => 1.99,
                'image' => 'https://via.placeholder.com/800x800.png?text=Blue+Band+Margarine',
                'categorie_id' => 17, // Snoep en Snacks
                'brand_id' => 40, // Blue Band
                'user_id' => 1,
            ], // ID: 55

        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
