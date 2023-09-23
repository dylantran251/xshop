<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('pages.blog', );
    }
    public function getblogsDetail($id)
    {
        dd($id);
    $items = blogs::find($id);
    return view('views.pages.blogsDetail', compact( 'items'));
    }
   
   
}
