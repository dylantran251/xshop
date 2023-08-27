<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\CheckoutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ContactController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Management\ProductCategoryController;
use App\Http\Controllers\Admin\Management\BrandController;
use App\Http\Controllers\Admin\Management\ProductController;
use App\Http\Controllers\Admin\Auth\LoginAdminController;

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('/login', [LoginAdminController::class, 'login'])->name('login');
    Route::post('/login/authenticate', [LoginAdminController::class, 'authenticate'])->name('login.authenticate');

    Route::middleware(['auth', 'isAdmin'])->group(function(){
        Route::get('/logout', [LoginAdminController::class, 'logout'])->name('logout');

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


        Route::group(['prefix'=>'management', 'as' => 'management.'], function(){

            Route::resource('/product-category', ProductCategoryController::class);
            Route::resource('/brand', BrandController::class);
            Route::resource('/product', ProductController::class);
        });     
    });   
});


// Users

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/shop/cart', [CartController::class, 'index'])->name('shop.cart');

Route::get('/shop/{id}/product-detail', [ShopController::class, 'showProduct'])->name('shop.product-details');
Route::get('/shop/{id}/add-product-to-cart', [ShopController::class, 'addProduct'])->name('shop.add-product-to-cart');
Route::delete('/cart/{id}/delete-product', [CartController::class, 'delProduct'])->name('cart.delete-product');

Route::get('/shop/cart/checkout', [CheckoutController::class, 'index'])->name('shop.cart.checkout');


Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/', [PageController::class, 'index'])->name('home');
// Route::get('/blog', [PageController::class, 'blog'])->name('blog');   
// Route::get('/shop', [PageController::class, 'shop'])->name('shop');
// Route::get('/blog/detail', [PageController::class, 'blogDetails'])->name('blog.detail');
// Route::get('/shop/detail', [PageController::class, 'shopDetails'])->name('shop.detail');
// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/register', [AuthController::class, 'register'])->name('register'); 
// Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('login.authenticate');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password'); 