<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            $user_id = Auth::user()->id;
            $cart = Cart::where('user_id', $user_id)->get();
            $cartItem = Cart::where('user_id', $user_id)->where('product_id', $id)->first();
            if($cartItem){
                // $quantity = $cartItem->quantity;
                $cartItem->update([
                    'quantity' => $cartItem->quantity + 1 ,
                    'sub_total' => ($cartItem->quantity+1) * $product->price,
                ]);
            }
            else{
                Cart::create([
                    'user_id'  => Auth::user()->id, 
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'sub_total' => $product->price
                ]);
            }
        }
        else{
            $cart = session()->get('cart', []);
            if(isset($cart[$id])){
                $cart[$id]['quantity']++;
                $cart[$id]['sub_total'] = $cart[$id]['quantity'] * $product->price;
            }else{
                $cart[$id] = [
                    "product_id" => $product->id,
                    "name" => $product->name, 
                    "quantity" => 1,
                    "image" => $product->image,
                    "price" => $product->price,
                    "sub_total" => $product->price,
                ];
            }
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('sucsess', 'Sản phẩm đã được thêm vào giỏ hàng!');
    }
}
