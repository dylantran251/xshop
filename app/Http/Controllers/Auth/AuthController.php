<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $productCategory = ProductCategory::all();
        return view('auth.login', ['productCategory' => $productCategory]);
    }
}
