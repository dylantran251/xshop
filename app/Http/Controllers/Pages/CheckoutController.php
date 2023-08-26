<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(){
        $total = 0;
        $formatTotal = 0;
        $userDetails = ([
            'first_name' => '', 	
            'last_name'	=> '',
            'phone'	=> '',
            'address1' => ',,,,,',
        ]);
        if(Auth::check()){
            $user = Auth::user();
            $cartItems = $user->carts()->with('product')->get();
            $userDetails = $user->userDetails()->first();
            foreach($cartItems as $item){
                $total += $item['sub_total'];
                $formatTotal = number_format($total, 0, ',', '.');
                $formatSubTotal = number_format($item->sub_total, 0, ',', '.');
                $items[] = [
                    'name' => $item->product->name,
                    'sub_total' => $formatSubTotal,
                ];
            }
        }
        else{
            if(session()->has('cart')){
                $cartItems = session('cart');
                foreach($cartItems as $item){
                    $total += $item['sub_total'];
                    $formatTotal = number_format($total, 0, ',', '.');
                    $formatSubTotal = number_format($item['sub_total'], 0, ',', '.');
                    $items[] = [
                        'name' => $item['name'],
                        'sub_total' => $formatSubTotal,
                    ];
                    
                }
            }
        }
       
        if($items){
            return view('pages.checkout', ['items' => $items , 'formatTotal' => $formatTotal, 'userDetails' => $userDetails]);
        }

        return redirect()->back()->with('cart_null', 'Bạn chưa thêm sản phẩm vào trong giỏ hàng!');
        
    }

    public function store(Request $request){
        $total = 0;
        $checkDefaulAddress = $request->input('defaulAddress');
        $name = 'user_'.time().Str::random(5);
        $address = $request->address1.','.$request->address2.','.$request->address3.','.$request->address4.','.$request->address5;
        if(Auth::check()){
            $user = Auth::user();
            $cartItems = $user->carts()->with('product')->get();
            $checkUserDetails = $user->userDetails()->first();
            if($cartItems){
                if($checkDefaulAddress){
                    if($checkUserDetails){
                        $user->userDetails()->update([
                            'phone' => $request->phone,	
                            'address1' => $address	
                        ]);
                    }
                    else{
                        $user->userDetails()->create([
                            'first_name' => $request->firstName,	
                            'last_name' => $request->lastName,
                            'phone' => $request->phone,	
                            'address1' => $address	
                        ]);
                    }
                }
                else{
                    if($checkUserDetails){
                        $user->userDetails()->update([
                            'address2' => $address,
                            'phone' => $request->phone	
                        ]);
                    }
                    else{
                        $user->userDetails()->create([
                            'first_name' => $request->firstName,	
                            'last_name' => $request->lastName,
                            'phone' => $request->phone,	
                            'address2' => $address	
                        ]);
                    }
                }
                $order = $user->orders()->create([
                    'status' => 0,
                    'total_amount' => 0,
                    'payment_method' => $request->paymentMethod,
                ]);
                foreach($cartItems as $item){
                    $total += $item->sub_total;
                    $order->orderDetails()->create([
                        'product_id' => $item->product->id,
                        'quantity'	=> $item->quantity,
                        'sub_total' => $item->sub_total
                    ]);
                    $cartID = Cart::findOrFail($item->id);
                    $cartID->delete();
                }
                $order->update([
                    'total_amount' => $total,
                ]);

            }
            return view('notification.checkout-success');
        }else{
            $checkRegister = $request->input('register');
            if((session()->has('cart'))){
                if($checkRegister){
                    $checkEmail = User::where('email', $request->email)->first();
                    if($checkEmail){
                        return redirect()->back()->with('notification', 'Email này đã được đăng ký. Bạn hãy đăng nhập để tiếp tục mua hàng!'); 
                    }
                    else{
                        // Tạo tài khoản user mới
                        $user = User::create([
                            'name' => $name,
                            'roles' => 1,
                            'email' => $request->email,
                            'password' => bcrypt($request->password),
                            'remember_token' => Str::random(10)
                        ]);
                        // Nếu người dùng tích vào đặt làm địa chỉ mặc định thì lưu địa chỉ vào address1 và ngược lại lưu vào address2
                        if($checkDefaulAddress){
                            $user->userDetails()->create([
                                'first_name' => $request->firstName,	
                                'last_name' => $request->lastName,
                                'phone' => $request->phone,	
                                'address1' => $address	
                            ]);
                        }
                        else{
                            $user->userDetails()->create([
                                'first_name' => $request->firstName,	
                                'last_name' => $request->lastName,
                                'phone' => $request->phone,	
                                'address2' => $address	
                            ]);
                        }
                        $order = $user->orders()->create([
                            'status' => 0,
                            'total_amount' => 0,
                            'payment_method' => $request->paymentMethod,
                        ]);
                        // Thêm đơn hàng mới 
                        foreach(session('cart') as $item) {
                            $total += $item['sub_total'];
                            $order->orderDetails()->create([
                                'product_id' => $item['product_id'],
                                'quantity'	=> $item['quantity'],
                                'sub_total' => $item['sub_total']
                            ]);

                        }
                        $order->updated([
                            'total_amount' => $total,
                        ]);
                        $request->session()->forget('cart');
                        Auth::login($user);                                                                                        
                        return view('notification.checkout-success');
                    }
                }
            }
        }
        return redirect()->back()->with('notification', 'Bạn cần đăng nhập để mua hàng. Nếu chưa có tài khoản hãy tích vào Tạo tài khoản!');
    }
}
