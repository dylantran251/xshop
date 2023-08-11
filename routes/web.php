<?php

use App\Http\Controllers\Admin\Management\BrandController;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Management\ProductCategoryController;

Route::get('/', function(){
    return view('pages.home');
});

Route::resource('/brand', BrandController::class);

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    // Route::get('/login', [AdminController::class, 'login'])->name('login');
    // Route::post('/login/authenticate', [AdminController::class, 'authenticate'])->name('login.authenticate');
    // Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    // Route::middleware(['is_admin'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix'=>'management', 'as' => 'management.'], function(){
        Route::resource('/product-category', ProductCategoryController::class);
        // Route::resource('/category-blog', CategoryBlogController::class);
        // Route::resource('/product', ProductController::class);
        Route::resource('/brand', BrandController::class);
    });
    // });

});

   
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