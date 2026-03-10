<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $imgPath = null;
        if ($request->hasFile('image')) {
            $imgPath = $request->File('image')->store('banners', 'public');
        }
        Banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $imgPath,
            'status' => $request->status
        ]);
        return redirect('admin.banners.index');
    }

    public function edit($id)
    {
        $banners = Banner::findOrfail($id);
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banners = Banner::findOrFail($id);
        $imgPath = $banners->image;
        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('banners', 'public');
        }
        $banners->update([

            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $imgPath,
            'status' => $request->status

        ]);
        return redirect()->route('admin.banners.index');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        $banner->delete();

        return redirect()->route('admin.banners.index');
    }
}
