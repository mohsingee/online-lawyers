<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;

class CmsController extends Controller
{
    public function index(Request $request)
    {
        $cmsPages = Cms::where('page',$request->page)->latest()->get();
        $page = $request->page;
        return view('logged.pages.cms.index', compact('cmsPages','page'));
    }

    public function create(Request $request)
    {
        $page = $request->page;
        return view('logged.pages.cms.create',compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required|string|max:255',
            'section' => 'required|integer',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->only(['page', 'section', 'title', 'description']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('cms_images'), $filename);
            $data['image'] = 'cms_images/' . $filename;
        }

        Cms::create($data);

        return redirect()->route('cms.index',['page'=>$request->page])->with('success', 'CMS Page created successfully.');
    }

    public function edit(Cms $cms)
    {
        return view('logged.pages.cms.edit', compact('cms'));
    }

    public function update(Request $request, Cms $cms)
    {
        $request->validate([
            'page' => 'required|string|max:255',
            'section' => 'required|integer',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $data = $request->only(['page', 'section', 'title', 'description']);

        if ($request->hasFile('image')) {
            if ($cms->image && file_exists(public_path($cms->image))) {
                unlink(public_path($cms->image));
            }

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('cms_images'), $filename);
            $data['image'] = 'cms_images/' . $filename;
        }

        $cms->update($data);

        return redirect()->route('cms.index',['page'=>$request->page])->with('success', 'CMS Page updated successfully.');
    }

    public function destroy(Cms $cms)
    {
        if ($cms->image && file_exists(public_path($cms->image))) {
            unlink(public_path($cms->image));
        }

        $cms->delete();

        return response()->json(['message' => 'CMS Page deleted successfully.']);
    }
}
