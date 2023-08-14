<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.management.product.index', ['products'=>$products]);
    }
    public function create()
    {
        $brands = Brand::all();
        $categories = ProductCategory::all();
        return view('admin.management.product.create', ['brands'=>$brands, 'categories'=>$categories]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'image.*' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'category' => 'required',
            'brand' => 'required',
            'name' => 'required', 
            'price' => 'required',
            'description' => 'nullable',
            'flexRadioDefault' => 'required' 
        ]);
        if($request->has('image')){
            $images = array();
            foreach($request->file('image') as $image){
                $filePath = Str::uuid().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('/images/products'), $filePath);
                $images[] = $filePath;
            }     
            Product::create([
                'image' => implode('|', $images),
                'category_product_id' => $request->category,
                'brand_id' => $request->input('brand') ,
                'name' => $request->name, 
                'price' => $request->input('price'),
                'description' => $request->description,
                'status' => $request->flexRadioDefault
            ]);      
        }
        return redirect()->route('admin.management.product.index')->with('Sucsess', 'Create Product Sucessful');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.management.product.show', ['product'=>$product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.management.product.edit', ['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image.*' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'category' => 'required',
            'brand' => 'required',
            'name' => 'required', 
            'price' => 'required',
            'description' => 'nullable',
            'flexRadioDefault' => 'required' 
        ]);
        $product = Product::findOrFail($id);
        // if($request->hasFile('image')){

        // }
    }

    public function destroy(string $id)
    {
        //
    }
}
