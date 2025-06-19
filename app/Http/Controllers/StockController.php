<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Get the stock history for a specific product.
     */
    public function stockHistory(Request $request)
    {

        $query = Stock::with('product');

        if ($request->product_id) {
            $query->where('product_id', $request->product_id);
        }
        if ($request->stock_type) {
            $query->where('stock_type', $request->stock_type);
        }
        if ($request->start_date) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }
        if ($request->end_date) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }

         $stocks = $query->latest()->paginate(10);
         return response()->json(['stocks' => $stocks]);
    }
}
