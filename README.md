<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Duurzame Scanner

## Overview

Duurzame Scanner is a web application designed to scan products and retrieve detailed information about their sustainability, allergens, alternatives, and more. The application uses Laravel for the backend and integrates with Pusher for real-time updates.

## Features

- Scan products by barcode
- Retrieve product details including user, category, brand, sustainabilities, allergens, and alternatives
- Real-time updates using Pusher
- API endpoints for product management
- Database seeding for initial data setup

## Getting Started

### Prerequisites

- PHP ^8.2
- Composer
- Node.js
- MySQL

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/your-repo/duurzame-scanner.git
    cd duurzame-scanner
    ```

2. Install dependencies:
    ```sh
    composer install
    npm install
    ```

3. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```sh
    cp .env.example .env
    ```

4. Generate an application key:
    ```sh
    php artisan key:generate
    ```

5. Run migrations and seed the database:
    ```sh
    php artisan migrate --seed
    ```

6. Start the development server:
    ```sh
    php artisan serve
    npm run dev
    ```

## Usage

### API Endpoints

#### Get Product by Barcode

- **URL:** `/api/product-by-barcode`
- **Method:** `POST`
- **Parameters:**
  - `barcode` (string, required): The barcode of the product to retrieve.
- **Response:**
  - 200: Product details
  - 404: Product not found
  - 500: An error occurred

**Function:**
```php
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
    
```
Get All Products Orders
URL: /api/products-orders
Method: GET
Response:
200: List of products orders
Function:
```php
<?php
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
```
Finalize Order
URL: /api/finalize-order
Method: POST
Response:
200: Order finalized successfully
400: No products in the order to finalize
500: An error occurred
Function:
```php
<?php
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
```

``` php
<?php
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
```
Get All Orders
URL: /api/orders
Method: GET
Response:
200: List of orders
Function:
``` php
<?php
public function getAllOrders()
{
    $orders = Order::with('products')->get();
    return response()->json($orders);
}
```
Get Order by ID
URL: /api/order/{id}
Method: GET
Response:
200: Order details
404: Order not found
Function:
``` php
<?php
public function getOrderById($id)
{
    $order = Order::with('products')->find($id);
    if ($order) {
        return response()->json($order);
    } else {
        return response()->json(['message' => 'Order not found'], 404);
    }
}
```


Get Sustainabilities for a Product
URL: /api/product/{id}/sustainabilities
Method: GET
Response:
200: List of sustainabilities
404: Product not found
Function:
``` php 
<?php
public function getSustainabilities($id)
{
    try {
        $product = Product::with('sustainabilities')->find($id);
        if ($product) {
            return response()->json($product->sustainabilities);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
    }
}
```
Get Allergens for a Product
URL: /api/product/{id}/allergens
Method: GET
Response:
200: List of allergens
404: Product not found
Function:
``` php
<?php
public function getAllergens($id)
{
    try {
        $product = Product::with('allergens')->find($id);
        if ($product) {
            return response()->json($product->allergens);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
    }
}
```
Get Alternatives for a Product
URL: /api/product/{id}/alternatives
Method: GET
Response:
200: List of alternatives
404: Product not found
Function:
``` php
<?php
public function getAlternatives($id)
{
    try {
        $product = Product::with('alternatives')->find($id);
        if ($product) {
            return response()->json($product->alternatives);
        } else {
            return response()->json(['message' => 'Product not found'], 404);
        }
    } catch (\Exception $e) {
        return response()->json(['message' => 'An error occurred', 'error' => $e->getMessage()], 500);
    }
}
```
## Migrations and seeders
### migrations
Migrations are used to create the database schema. Here are some examples:

Create Products Table:
``` php
<?php
Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('barcode');
    $table->string('name');
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2);
    $table->string('image')->nullable();
    $table->foreignId('categorie_id')->constrained('categories')->onDelete('cascade')->nullable();
    $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade')->nullable();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->nullable();
    $table->timestamps();
});
```
Create Product Allergen Pivot Table:
``` php

<?php
Schema::create('product_allergen', function (Blueprint $table) {
    $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
    $table->foreignId('allergen_id')->constrained('allergens')->onDelete('cascade');
    $table->primary(['product_id', 'allergen_id']);
});
```

### Seeders
Seeders are used to populate the database with initial data. Here are some examples:

Product Seeder:
``` php
<?php
$products = [
    [
        'barcode' => '8718452050013',
        'name' => 'AH Runder Hamburger 2 stuks',
        'description' => 'Hamburgers gemaakt van mild gekruid rundvlees met een rulle structuur.',
        'price' => 3.19,
        'image' => 'https://static.ah.nl/dam/product/AHI_4354523130303936363834?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
        'categorie_id' => 1,
        'brand_id' => 1,
        'user_id' => 1,
    ],
    // More products...
];

foreach ($products as $productData) {
    Product::create($productData);
}
```
Product Attach Seeder:
``` php
<?php
$productAllergens = [
    50 => [1], // M&M's Pinda - Peanuts
    51 => [5], // Knorr Wereldgerechten - Wheat
    // More product allergens...
];

foreach ($productAllergens as $productId => $allergenIds) {
    $product = Product::find($productId);
    if ($product) {
        foreach ($allergenIds as $allergenId) {
            if (!$product->allergens()->wherePivot('allergen_id', $allergenId)->exists()) {
                $product->allergens()->attach($allergenId);
            }
        }
    }
}
```
Product Attach Seeder:
``` php
<?php
$productAllergens = [
    50 => [1], // M&M's Pinda - Peanuts
    51 => [5], // Knorr Wereldgerechten - Wheat
    // More product allergens...
];

foreach ($productAllergens as $productId => $allergenIds) {
    $product = Product::find($productId);
    if ($product) {
        foreach ($allergenIds as $allergenId) {
            if (!$product->allergens()->wherePivot('allergen_id', $allergenId)->exists()) {
                $product->allergens()->attach($allergenId);
            }
        }
    }
}
```
## Models and Relationships

Product Model

``` php
<?php
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'name',
        'description',
        'price',
        'categorie_id',
        'brand_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function sustainabilities()
    {
        return $this->belongsToMany(Sustainability::class, 'product_sustainability');
    }

    public function allergens()
    {
        return $this->belongsToMany(Allergen::class, 'product_allergen');
    }

    public function alternatives()
    {
        return $this->belongsToMany(Product::class, 'product_alternative', 'product_id', 'alternative_id')->withPivot('reason');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
```

ProductsOrder Model
``` php	
<?php
class ProductsOrder extends Model
{
    use HasFactory;

    protected $table = 'product_order';

    protected $fillable = [
        'product_id',
        'barcode',
        'name',
        'description',
        'price',
        'categorie_id',
        'brand_id',
        'user_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```

##env file
``` php
APP_NAME=DuurzameScanner
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=duurzamescanner
DB_USERNAME=root
DB_PASSWORD=


CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
```
