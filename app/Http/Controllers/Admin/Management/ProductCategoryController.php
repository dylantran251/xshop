<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ProductCategory::all();
        return view('admin.management.product-category.index', ['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.product-category.create');
    }
    
    public function store(Request $request)
    {
        $request -> validate([
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => 'required',
            'description' => 'nullable', 
            'flexRadioDefault' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/product-category'), $filePath);
            $request->image = $filePath;
        }
        ProductCategory::create([
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            "status" => $request->flexRadioDefault
        ]);
        return redirect()->route('admin.management.product-category.index')->with('success', 'Create category product success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('admin.management.product-category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = ProductCategory::findOrFail($id);
        return view('admin.management.product-category.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => 'required',
            'description' => 'nullable', 
            'flexRadioDefault' => 'required'
        ]);
        $category = ProductCategory::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/product-category/' . $category->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/product-category'), $filePath);
            $request->image = $filePath;
        }
        $category->update([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->flexRadioDefault,
            'description' => $request->description
        ]);
        // dd($request->all());
        return redirect()->route('admin.management.product-category.index')->with('success', 'Update Product Category Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoryProduct = ProductCategory::findOrFail($id);
        $imagePath = public_path('images/product-category/' . $categoryProduct->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $categoryProduct->delete();
        return redirect()->route('admin.management.product-category.index')->with('success', 'Delete Category Product Success!');
    }
}
