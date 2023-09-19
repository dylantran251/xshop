<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index(){
        $orders = Order::with(['user.userDetails'])->where('status', 0)->get();      
        return view('admin.dashboard', ['orders' => $orders]);
    }

    public function orderConfirmation($id){
        $order = Order::findOrFail($id);
        $order->update([
            'status' => 1,
        ]);
        return redirect()->back()->with('sucsess', 'Xác nhận đơn hàng thành công!');
    }


    
}
