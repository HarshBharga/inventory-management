<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use omarchouman\LaraUtilX\Http\Controllers\CrudController;
class ProductController extends CrudController
{
    public function __construct(Product $model)
   {
       parent::__construct($model);

       $this->relationships = ['stocks'];
   }
    /**
     * Get the stock balance for a specific product.
     */
    public function stockBalance($product_id)
    {

    }
}
