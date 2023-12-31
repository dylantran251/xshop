<?php

use App\Http\Controllers\Pages\CheckoutController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Pages\CartController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ShopController;
use App\Http\Controllers\Pages\ContactController;
use App\Http\Controllers\Pages\OrderController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Management\ProductCategoryController;
use App\Http\Controllers\Admin\Management\BlogCategoryController;
use App\Http\Controllers\Admin\Management\BrandController;
use App\Http\Controllers\Admin\Management\ProductController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/authenticate', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/store', [RegisterController::class, 'store'])->name('register.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function(){
    Route::middleware(['isAdmin'])->group(function(){
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/dashboard/order-waiting/{id}/confirm', [DashboardController::class, 'orderConfirmation'])->name('dashboard.order-waiting.confirm');
        Route::group(['prefix'=>'management', 'as' => 'management.'], function(){
            Route::resource('/product-category', ProductCategoryController::class);
            Route::resource('/brand', BrandController::class);
            Route::resource('/product', ProductController::class);
            Route::resource('/blog', BlogController::class);
            Route::resource('/blog-category', BlogCategoryController::class);
        });   
    });   
});

// Users
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/shop/cart', [CartController::class, 'index'])->name('shop.cart');

Route::get('/shop/{id}/product-details', [ShopController::class, 'showProduct'])->name('shop.product-details');
Route::get('/shop/{id}/add-product-to-cart', [ShopController::class, 'addProduct'])->name('shop.add-product-to-cart');

Route::get('/shop/cart/checkout', [CheckoutController::class, 'index'])->name('shop.cart.checkout');
Route::post('/shop/cart/checkout/store', [CheckoutController::class, 'store'])->name('shop.cart.checkout.store');
Route::delete('/shop/cart/{id}/delete-item-cart', [CartController::class, 'delCartItem'])->name('shop.cart.delete-item-cart');
Route::put('/shop/cart/{id}/update-quantity', [CartController::class, 'updateQuantity'])->name('shop.cart.update-quantity');
Route::get('/shop/category/{id}/product', [HomeController::class, 'getProductCategory'])->name('shop.category.product');
Route::middleware('auth')->group(function(){
    Route::get('/order/my-order/order-tracking', [OrderController::class, 'orderTracking'])->name('order.my-order.order-tracking');
});




// Route::get('/', [PageController::class, 'index'])->name('home');
// Route::get('/blog', [PageController::class, 'blog'])->name('blog');   
// Route::get('/shop', [PageController::class, 'shop'])->name('shop');
// Route::get('/blog/detail', [PageController::class, 'blogDetails'])->name('blog.detail');
// Route::get('/shop/detail', [PageController::class, 'shopDetails'])->name('shop.detail');
