<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();

        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'opening_hours' => 'required',
            'map' => 'required'
        ]);

        $setting = Setting::first();

        if(!$setting){
            Setting::create($request->all());
        } else {
            $setting->update($request->all());
        }

        return back()->with('success','Contact settings updated successfully');
    }
}