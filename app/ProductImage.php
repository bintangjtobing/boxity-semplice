<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    protected $fillable = [
        'product_id', 'photo'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
