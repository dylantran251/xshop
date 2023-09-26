<?php

namespace App\Http\Controllers\Pages;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){ 
        $products = [];
        $total = 0;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $cartItems = Cart::where('user_id', $user_id)->get();
            foreach ($cartItems as $cartItem) {
                $product = Product::findOrFail($cartItem->product_id);
                if ($product) {
                    $quantity = $cartItem->quantity;
                    $subTotal = $cartItem->sub_total;
                    $formatSubTotal = number_format($subTotal, 0, ',', '.') . 'đ';
                    $price = $product->price;
                    $formatPrice = number_format($price, 0, ',', '.') . 'đ';
                    $images = $product->image;
                    $subImg = explode("|", $images);
                    $total = $total + $subTotal;
                    $products[] = [
                        'cart_id' => $cartItem->id,
                        'image' => $subImg[0],
                        'name' => $product->name,
                        'price' => $formatPrice,
                        'quantity' => $quantity,
                        'formatSubTotal' => $formatSubTotal,
                    ];
                }
            }
        }
        else if(session()->has('cart')){
            foreach(session('cart') as $item){
                $quantity = $item['quantity'];
                $subTotal = $item['sub_total'];
                $formatSubTotal = number_format($subTotal, 0, ',', '.') . 'đ';
                $price = $item['price'];
                $formatPrice = number_format($price, 0, ',', '.') . 'đ';
                $images = $item['image'];
                $subImg = explode("|", $images);
                $total = $total + $subTotal;
                $products[] = [
                    'cart_id' => $item['product_id'],
                    'image' => $subImg[0],
                    'name' => $item['name'],
                    'price' => $formatPrice,
                    'quantity' => $quantity,
                    'formatSubTotal' => $formatSubTotal
                ];
            }
        }    
        return view('pages.cart', ['products' => $products, 'total' => $total]);
    }

    public function delCartItem($id, Request $request){
        if(Auth::check()){
            $cartItem = Cart::findOrFail($id);
            $cartItem->delete();
        }else if(session()->has('cart')){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
        }
        return redirect()->back()->with('delete', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
    }

    public function updateQuantity(Request $request){
        if(Auth::check()){
            $userID = Auth::user()->id;
            dd($request->quantity);
        }
        else if(session()->has('cart')){
            dd($request->input('quantity'));
        }
    }

    public function formatVND($money){

    }
}
