<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $product = Product::all();
        $productCategory = ProductCategory::all();
        return view('pages.shop',['products' => $product, 'productCategory' => $productCategory]);
    }
}
