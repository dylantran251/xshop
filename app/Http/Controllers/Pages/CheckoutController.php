<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        return view('pages.checkout');  
    }

    public function store(Request $request){
        if(Auth::check()){
            return view('notification.checkout-success');
        }
        return redirect()->back()->with('notification', 'Bạn cần đăng nhập để mua hàng. Nếu chưa có tài khoản hãy kích vào Tạo tài khoản!');
    }
}
