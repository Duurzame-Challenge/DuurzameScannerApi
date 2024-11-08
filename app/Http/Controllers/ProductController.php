<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductsOrder;
use App\Models\Order;
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

        try {
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
                // Save the scanned product details to the products_order table
                ProductsOrder::create([
                    'product_id' => $product->id,
                    'barcode' => $product->barcode,
                    'name' => $product->name,
                    'description' => $product->description,
                    'price' => $product->price,
                    'categorie_id' => $product->categorie_id,
                    'brand_id' => $product->brand_id,
                    'user_id' => $product->user_id,
                ]);

                return response()->json($product);
            } else {
                return response()->json(['message' => 'Product not found'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
        }
    }

    public function getProductsOrders()
    {
        $productsOrders = ProductsOrder::with([
            'product',
            'categorie',
            'brand',
            'user'
        ])->get();

        return response()->json($productsOrders);
    }



    public function finalizeOrder(Request $request)
    {
        try {
            // Check if there are any products in the products_order table
            $firstProductOrder = ProductsOrder::first();
            if (!$firstProductOrder) {
                return response()->json(['message' => 'No products in the order to finalize'], 400);
            }

            // Sum up the total price of all products in the products_order table
            $total = ProductsOrder::sum('price');

            // Get the user_id from the first product order (assuming all products belong to the same user)
            $user_id = $firstProductOrder->user_id;

            // Create a new order
            $order = Order::create([
                'user_id' => $user_id,
                'total' => $total,
                'status' => 'completed',
            ]);

            // Attach products to the order
            $productsOrders = ProductsOrder::all();
            foreach ($productsOrders as $productsOrder) {
                $order->products()->attach($productsOrder->product_id);
            }

            // Concatenate product names
            $productNames = $productsOrders->pluck('name')->implode(', ');

            // Update the order with the concatenated product names
            $order->update(['product_names' => $productNames]);

            // Discard all data from the products_order table
            ProductsOrder::truncate();

            // Reload the order to include the products relationship
            $order->load('products');

            return response()->json(['message' => 'Order finalized successfully', 'order' => $order, 'product_names' => $order->product_names]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
        }
    }
}
