<?php

namespace App\Http\Controllers\Pages;

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
        $sub_total = $product->price;
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart = Cart::where('user_id', $user_id)->get();
            $checkCart = $cart->contains('product_id', $id);
            if($checkCart){
                $cartItem = Cart::where('user_id', $user_id)->where('product_id', $id)->first();
                $cartItem->update([
                    'quantity' => $cartItem->quantity + 1, 
                    'sub_total' => $cartItem->quantity * $sub_total,
                ]);
            }
            else{
                Cart::create([
                    'user_id'  => Auth::user()->id, 
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'sub_total' => $sub_total
                ]);
            }
        }
        else{
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
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('sucsess', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}
