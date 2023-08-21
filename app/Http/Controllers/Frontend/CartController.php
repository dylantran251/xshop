<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){ 
        return view('pages.cart');
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
