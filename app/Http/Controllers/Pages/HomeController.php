<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request){
        if(Auth::check()){
            $user_id = Auth::user()->id;
            if(session()->has('cart')){
                foreach(session('cart') as $item){
                    $cartItems = Cart::where('user_id', $user_id)->where('product_id', $item['product_id'])->first();
                    if($cartItems){
                        $cartItems->update([
                            'quantity' => $cartItems->quantity + $item['quantity'],
                            'sub_total' => $cartItems->sub_total + $item['sub_total']
                        ]);
                    }
                    else{
                        Cart::create([
                            'user_id' => $user_id, 
                            'product_id' => $item['product_id'],
                            'quantity' => $item['quantity'],
                            'sub_total' => $item['sub_total']
                        ]);
                    }
                }
                $request->session()->forget('cart');
            }
            $numProducts = Cart::where('user_id', $user_id)->count();
            session(['numProducts' => $numProducts]);
        }
        $productCategory =  ProductCategory::all();
        session(['productCategory' => $productCategory]);
        $products = Product::all();
        return view('pages.home', ['products' => $products]);
    }
}
