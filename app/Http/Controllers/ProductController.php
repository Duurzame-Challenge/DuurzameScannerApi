<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    // show
    public function show($id)
    {
        $product = Product::with([
            'user',
            'categorie',
            'brand',
            'sustainabilities',
            'allergens',
            'alternatives',
            'orders'
        ])->find($id);

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }


    public function getProductByBarcode(Request $request)
    {
        $request->validate([
            'barcode' => 'required|string',
        ]);

        $barcode = $request->input('barcode');
        $product = Product::with([
            'user',
            'categorie',
            'brand',
            'sustainabilities',
            'allergens',
            'alternatives',
            'orders'
        ])->where('barcode', $barcode)->first();

        if ($product) {
            return response()->json($product);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    }
}
