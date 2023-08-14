<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $product = Product::all();
        $productCategory = ProductCategory::all();
        return view('pages.contact', ['productCategory' => $productCategory]);
    }
}
