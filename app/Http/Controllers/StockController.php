<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use omarchouman\LaraUtilX\Http\Controllers\CrudController;

class StockController extends CrudController
{
    public function __construct(Stock $model)
   {
       parent::__construct($model);

       // Define relationships to load
       $this->relationships = ['product'];

       // Customize items per page
       $this->perPage = 20;
   }
    /**
     * Get the stock history for a specific product.
     */
    public function stockHistory(Request $request)
    {

    }
}
