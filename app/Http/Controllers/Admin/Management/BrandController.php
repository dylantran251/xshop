<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.management.brand.index', ['brands'=>$brands]);
    }

    public function create()
    {
        return view('admin.management.brand.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120|required',
            'flexRadioDefault' => 'required',
            'hotline' => 'required',
            'address1' => 'required', 
            'address2' => 'required',
            'address3' => 'required',
            'address4' => 'required',
            'description' => 'required' 
        ]);
        if($request->hasFile('image')){
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/brands'), $filePath);
            $request->image = $filePath;
        }
        $address = $request->address1 . ', ' . $request->address2 . ', ' . $request->address3 . ', ' . $request->address4;
        Brand::create([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->flexRadioDefault,
            'hotline' => $request->hotline,
            'address' => $address, 
            'description' => $request->description,
        ]);
        return redirect()->route('admin.management.brand.index')->with('Sucsess', 'Add brand new sucsses!');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.management.brand.edit', ['brand' => $brand]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120|required',
            'flexRadioDefault' => 'required',
            'hotline' => 'required',
            'address1' => 'required', 
            'address2' => 'required',
            'address3' => 'required',
            'address4' => 'required',
            'description' => 'required' 
        ]);
        $brand = Brand::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/brands/' . $brand->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/brands'), $filePath);
            $request->image = $filePath;
        }
        $address = $request->address1 . ', ' . $request->address2 . ', ' . $request->address3 . ', ' . $request->address4;
        $brand->update([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->flexRadioDefault,
            'hotline' => $request->hotline,
            'address' => $address, 
            'description' => $request->description,
        ]);
        return redirect()->route('admin.management.brand.index')->with('Sucsess', 'Update brand sucsses!');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $imagePath = public_path('images/brands/' . $brand->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $brand->delete();
        return redirect()->route('admin.management.brand.index')->with('Success', 'Delete Brand Success!');
    }
}
