<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){ 
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cartItems = Cart::where('user_id', $user_id)->get();
            $products = [];
            foreach ($cartItems as $cartItem) {
                $product = Product::find($cartItem->product_id);
                if ($product) {
                    $products[] = $product;
                }
            }  
        }  
        else{
            (session('cart'));
            $products = session('cart');
        }        
        return view('pages.cart', ['products' => $products]);
    }

    public function delProduct(Request $request){

        $cart = session()->get('cart');
        if(isset($cart[$request->id])){
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Xóa sản phẩm thành công!');
    }
}
