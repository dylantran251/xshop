<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function getblogsDetail($id)
    {
    $item= Blog::find($id);
    $blogCategory  = BlogCategory::get();
    $blogs = Blog::get();
    return view('pages.blogsDetail', compact('item','blogCategory','blogs'));
    }
   
   
}
