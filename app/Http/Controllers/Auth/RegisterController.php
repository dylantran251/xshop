<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $user = $request->validate([
            'full-name' => 'nullable',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'confirm-password' => 'required'
        ]);
        $password = Hash::make($user['password']);
        if($request->password == $request->input('confirm-password')){
            User::insert([
                'name' => $user['full-name'],
                'email' => $user['email'],
                'password' => $password,
                'roles' => 1,
            ]);
            return redirect()->route('login')->with('registerSusses', 'Đăng ký tài khoản thành công!');
        }
        return redirect()->back();
    }
}
