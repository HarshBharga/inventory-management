<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Stock extends Model
{
    use HasFactory;

    protected $table = 'stocks';

    protected $fillable = [
        'product_id',
        'quantity',
        'stock_type',
        'reference_note',
    ];

    protected $casts = [
        'quantity' => 'integer',
    ];

    /**
     * Get the product associated with this stock entry.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
