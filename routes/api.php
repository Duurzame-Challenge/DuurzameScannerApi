<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product-by-barcode', [ProductController::class, 'getProductByBarcode']);
Route::get('/products-orders', [ProductController::class, 'getProductsOrders']);
Route::post('/finalize-order', [ProductController::class, 'finalizeOrder']);

Route::get('/orders', [ProductController::class, 'getAllOrders']);
Route::get('/order/{id}', [ProductController::class, 'getOrderById']);


// New routes to get specific relationships
Route::get('/product/{id}/sustainabilities', [ProductController::class, 'getSustainabilities']);
Route::get('/product/{id}/allergens', [ProductController::class, 'getAllergens']);
Route::get('/product/{id}/alternatives', [ProductController::class, 'getAlternatives']);
