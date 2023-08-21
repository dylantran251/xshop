<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Auth;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('pages.shop',['products' => $product]);
    }

    public function showProduct($id){
        $product = Product::findOrFail($id);
        return view('pages.product-details', ['product'=>$product]);
    }

    public function addProduct($id){
        $product = Product::findOrFail($id);
        if(Auth::check()){
            Cart::create([
                'user_id'  => Auth::user()->id, 
                'product_id' => $product->id,
            ]);
        }else{
            $cart = session()->get('cart', []);
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
            }else{
                $cart[$id] = [
                    "name" => $product->name, 
                    "quantity" => 1,
                    "image" => $product->image,
                    "price" => $product->price
                ];
            }
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('sucsess', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}
