<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Get the stock balance for a specific product.
     */
    public function stockBalance($product_id)
    {
        $product = Product::with('stocks')->findOrFail($product_id);

        $balance = $product->stocks->reduce(function ($carry, $stock) {
            return $carry + ($stock->stock_type === 'in' ? $stock->quantity : -$stock->quantity);
        }, 0);

        return response()->json(['stock_balance' => $balance]);
    }
}
