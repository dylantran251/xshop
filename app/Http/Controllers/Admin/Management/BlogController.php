<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.management.blogs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            $request->image->move(public_path('/images/blogs'), $filePath);
            $request->image = $filePath;
        }

        Blog::create([
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            "status" => $request->flexRadioDefault
        ]);
        return redirect()->route('admin.management.blogs.index')->with('success', 'Create category product success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Blog::find($id);
        return view('admin.management.blogs.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => 'required',
            'description' => 'nullable', 
            'flexRadioDefault' => 'required'
        ]);
        $blogs = Blog::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/blogs/' . $blogs->image);
            // if (File::exists($imagePath)) {
            //     File::delete($imagePath);
            // }
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/blogs'), $filePath);
            $request->image = $filePath;
        }
        $blogs->update([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->flexRadioDefault,
            'description' => $request->description
        ]);
        // dd($request->all());
        return redirect()->route('admin.management.blogs.index')->with('success', 'Update Product Category Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $remove = Blog::find($id);
        $remove->delete();
        return redirect()->route('admin.management.blogs.index')->with('Sucsess', 'Đã xóa danh sách bài viết');
    }
}
