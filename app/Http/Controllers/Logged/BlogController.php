<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use App\Models\LegalCategory;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('category')->latest()->get();
        $categories = LegalCategory::all();
        return view('admin.pages.blogs.index', compact('blogs', 'categories'));
    }

    public function create(){
        $categories = LegalCategory::all();
        return view('admin.pages.blogs.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'by' => 'nullable|string|max:100',
            'legal_category_id' => 'required|exists:legal_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description', 'by', 'legal_category_id');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog'), $filename);
            $data['image'] = 'blog/' . $filename;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function edit(Blog $blog){
        $categories = LegalCategory::all();
        return view('admin.pages.blogs.edit', compact('blog', 'categories'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'by' => 'nullable|string|max:100',
            'legal_category_id' => 'required|exists:legal_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('title', 'description', 'by', 'legal_category_id');

        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('blog'), $filename);
            $data['image'] = 'blog/' . $filename;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
