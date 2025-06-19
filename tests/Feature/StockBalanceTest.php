<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Product;
use App\Models\Stock;

class StockBalanceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_fetch_stock_balance()
    {
        $response = $this->getJson("/api/products/5/stock-balance");
        $response->assertOk();
        $response->assertJsonStructure(['stock_balance']);
        $response->assertJson(['stock_balance' => 30]);
    }
}
