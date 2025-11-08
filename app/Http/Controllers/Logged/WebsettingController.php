<?php

namespace App\Http\Controllers\Logged;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class WebsettingController extends Controller
{
    public function settings(){
        $settings = Setting::first();
        return view('admin.pages.settings',compact('settings'));
    }

    public function updateSettings(Request $request){
        $request->validate([
            'site_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'address' => 'nullable|string',
            'footer_text' => 'nullable|string|max:255',
        ]);

        $settings = Setting::first();

        $data = $request->only('site_name', 'phone', 'email', 'address', 'footer_text');

        if ($request->hasFile('logo')) {
            if (!file_exists(public_path('setting'))) {
                mkdir(public_path('setting'), 0777, true);
            }

            if ($settings->logo && file_exists(public_path($settings->logo))) {
                unlink(public_path($settings->logo));
            }

            $image = $request->file('logo');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('setting'), $filename);
            $data['logo'] = 'setting/' . $filename;
        }

        $settings->update($data);

        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
