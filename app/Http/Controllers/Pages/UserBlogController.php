<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Blog_category;
use App\Models\Blog;

class UserBlogController extends Controller
{
    public function index(){
        $blogCategory=Blog_category::all();
        $blogs=Blog::all();
       
        return view('pages.blog', compact('blogs','blogCategory'));
    }
}
