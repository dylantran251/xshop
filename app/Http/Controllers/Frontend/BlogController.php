<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('pages.blog', );
    }
}
