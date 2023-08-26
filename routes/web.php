<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Pages\CheckoutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\CartController;
use App\Http\Controllers\Pages\BlogController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ShopController;
use App\Http\Controllers\Pages\ContactController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Management\ProductCategoryController;
use App\Http\Controllers\Admin\Management\BrandController;
use App\Http\Controllers\Admin\Management\ProductController;
use App\Http\Controllers\Admin\Auth\LoginAdminController;
use App\Http\Controllers\Admin\Management\Blog;
use App\Http\Controllers\Admin\Management\BlogCategory;

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
            Route::resource('/blogs',Blog::class) ;
            Route::resource('/blog-category',BlogCategory::class) ;
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
Route::get('/shop/cart/checkout/store', [CheckoutController::class, 'store'])->name('shop.cart.checkout.store');


Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/auth/login/authenticate', [AuthController::class, 'authenticate'])->name('auth.login.authenticate');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');



// Route::get('/', [PageController::class, 'index'])->name('home');
// Route::get('/blog', [PageController::class, 'blog'])->name('blog');   
// Route::get('/shop', [PageController::class, 'shop'])->name('shop');
// Route::get('/blog/detail', [PageController::class, 'blogDetails'])->name('blog.detail');
// Route::get('/shop/detail', [PageController::class, 'shopDetails'])->name('shop.detail');
