<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('products/{product_id}/stock-balance', [ProductController::class, 'stockBalance']);
Route::get('stock-history', [StockController::class, 'stockHistory']);
