<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $blogs=Blog::all();
        $BlogCategory = BlogCategory::all();
        return view('admin.management.blogs.index',["blogs"=>$blogs,"BlogCategory"=>$BlogCategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs=BlogCategory::all();
        return view('admin.management.blogs.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'image' => 'image|required|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'title' => 'nullable',
            'description' => 'nullable', 
            'content' => 'nullable',
            'flexRadioDefault' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $filePath = time().'.'.request()->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/blogs'), $filePath);
            $request->image = $filePath;
        }
        if (Auth::check()) {
            $user_id = auth()->user()->id;
            Blog::create([
            'user_id' => $user_id ,
            'blog_category_id' => $request->blog_category_id,
            'title' =>$request->title,
            'image' => $request->image,
            'description' => $request->description,
            'content' => $request->content
        ]);}
       
        return redirect()->route('admin.management.blogs.index')->with('success', 'Create category product success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Blog::findOrFail($id);
        return view('admin.management.blogs.show', ['blogs' => $category]);
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
