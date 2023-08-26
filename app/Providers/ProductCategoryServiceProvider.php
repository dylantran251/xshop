<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ProductCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       
    }
    public function boot(): void
    {
        // 
        // $productCategory = ProductCategory::all();
        // View::share('productCategory', $productCategory);
    }
}
