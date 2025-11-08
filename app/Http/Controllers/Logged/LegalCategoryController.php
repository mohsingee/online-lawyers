<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use App\Models\LegalCategory;
use Illuminate\Http\Request;

class LegalCategoryController extends Controller
{
    public function index()
    {
        $categories = LegalCategory::latest()->get();
        return view('admin.pages.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(['message' => 'Form loaded']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        LegalCategory::create($request->only('name'));

        return response()->json(['message' => 'Category created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(LegalCategory $category)
    {
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $category = LegalCategory::findOrFail($id);
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate(['name' => 'required|string|max:255']);

        $category = LegalCategory::findOrFail($request->id);
        $category->update($request->only('name'));

        return response()->json(['message' => 'Category updated successfully']);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $category = LegalCategory::findOrFail($id);
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
