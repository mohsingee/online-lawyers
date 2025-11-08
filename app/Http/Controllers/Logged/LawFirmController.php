<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LawFirms;
use App\Models\LegalCategory;

class LawFirmController extends Controller
{
    public function index()
    {
        $lawfirms = LawFirms::with('category')->latest()->get();
        return view('logged.pages.lawfirms.index', compact('lawfirms'));
    }

    public function create()
    {
        $categories = LegalCategory::all();
        return view('logged.pages.lawfirms.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'legal_category_id' => 'required|exists:legal_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'linkedin_url' => 'nullable|url',
            'website_link' => 'nullable|url',
        ]);

        $data = $request->only('title', 'legal_category_id', 'description', 'linkedin_url', 'website_link');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lawfirm'), $filename);
            $data['image'] = 'lawfirm/' . $filename;
        }

        LawFirms::create($data);

        return redirect()->route('lawfirms.index')->with('success', 'Law Firm created successfully.');
    }

    public function edit(LawFirms $lawfirm)
    {
        $categories = LegalCategory::all();
        return view('logged.pages.lawfirms.edit', compact('lawfirm', 'categories'));
    }

    public function update(Request $request, LawFirms $lawfirm)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'legal_category_id' => 'required|exists:legal_categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'linkedin_url' => 'nullable|url',
            'website_link' => 'nullable|url',
        ]);

        $data = $request->only('title', 'legal_category_id', 'description', 'linkedin_url', 'website_link');

        if ($request->hasFile('image')) {
            if ($lawfirm->image && file_exists(public_path($lawfirm->image))) {
                unlink(public_path($lawfirm->image));
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('lawfirm'), $filename);
            $data['image'] = 'lawfirm/' . $filename;
        }

        $lawfirm->update($data);

        return redirect()->route('lawfirms.index')->with('success', 'Law Firm updated successfully.');
    }

    public function destroy(LawFirms $lawfirm)
    {
        if ($lawfirm->image && file_exists(public_path($lawfirm->image))) {
            unlink(public_path($lawfirm->image));
        }

        $lawfirm->delete();

        return response()->json(['message' => 'Law Firm deleted successfully.']);
    }
}
