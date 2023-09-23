<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\Blog_category;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $blogCategory=Blog_category::all();
        return view('admin.management.blog-category.index', ['blogCategory'=>$blogCategory]);
    }

    /**
     * Show the htgdtm form for creating a new resource.
     */
    public function create()
    {
        return view('admin.management.blog-category.create');
    }

    /**
     * Store a luu newly created resource in storage.
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
            $request->image->move(public_path('/images/blog-category'), $filePath);
            $request->image = $filePath;
        }

        Blog_category::create([
            'image' => $request->image,
            'name' => $request->name,
            'description' => $request->description,
            "status" => $request->flexRadioDefault
        ]);
        return redirect()->route('admin.management.blog-category.index')->with('success', 'Create category product success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Blog_category::findOrFail($id);
        return view('admin.management.blog-category.show', ['category' => $category]);
    }

    /**
     * Show the hthi gd cs form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Blog_category::find($id);
        return view('admin.management.blog-category.edit',compact('item'));
    }

    /**
     * Update cntt 1dm the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate([
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'name' => 'required',
            'description' => 'nullable', 
            'flexRadioDefault' => 'required'
        ]);
        $categoryBlog = Blog_category::findOrFail($id);
        if ($request->hasFile('image')) {
            $imagePath = public_path('images/blog-category/' . $categoryBlog->image);
            // if (File::exists($imagePath)) {
            //     File::delete($imagePath);
            // }
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('images/blog-category'), $filePath);
            $request->image = $filePath;
        }
        $categoryBlog->update([
            'name' => $request->name,
            'image' => $request->image,
            'status' => $request->flexRadioDefault,
            'description' => $request->description
        ]);
        // dd($request->all());
        return redirect()->route('admin.management.blog-category.index')->with('success', 'Cập nhập thông tin danh mục blog thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $remove = Blog_category::find($id);
        $remove->delete();
        return redirect()->route('admin.management.blog-category.index')->with('Sucsess', 'Đã xóa danh sách bài viết');
    }
}
