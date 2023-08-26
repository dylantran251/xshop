<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'brand_id',
        'product_category_id',
        'image',
        'name',
        'description',
        'status',
        'price'
    ];

    protected $primaryKey = 'id';
    public function carts() {
        return $this->hasMany(Cart::class);
    }
}
