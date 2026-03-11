<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WineGuide;
use Illuminate\Support\Str;

class WineGuideController extends Controller
{
    public function index()
    {
        $guides = WineGuide::latest()->get();
        return view('admin.wineGuide.index', compact('guides'));
    }

    public function create()
    {
        return view('admin.wineGuide.create');
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'type' => 'required',
            'image' => 'nullable|image'
        ]);

        $data['slug'] = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('wineGuide', 'public');
        }

        WineGuide::create($data);

        return redirect()->route('admin.wineGuides.index');
    }

    public function edit($id)
    {
        $guide = WineGuide::findOrFail($id);

        return view('admin.wineGuide.edit', compact('guide'));
    }
    public function update(Request $request, $id)
    {
        $guide = WineGuide::findOrFail($id);
        $imgPath = $guide->image;

        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('wineGuide', 'public');
        }

        $guide->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $imgPath
        ]);
        return redirect()->route('admin.wineGuides.index');
    }

    public function destroy($id)
    {
        $guide = WineGuide::findOrFail($id);
        $guide->delete();

        return redirect()->route('admin.wineGuide.index');
    }
}
