<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Allergen;
use App\Models\Alternative;
use App\Models\Sustainability;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with([
            'user',
            'categorie',
            'brand',
            'sustainabilities',
            'allergens',
            'alternatives',
            'orders'
        ])->get();

        return response()->json($products);
    }
}
