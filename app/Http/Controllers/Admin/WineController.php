<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Wine;
use App\Models\Category;
use App\Models\WineGuide;
use Illuminate\Support\Str;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $wines = Wine::with('category')->latest()->get();

    return view('admin.wines.index', compact('wines'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.wines.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required'
        ]);

        $imgPath = null;

        if ($request->hasFile('image')) {
            $imgPath = $request->file('image')->store('wines', 'public');
        }
        Wine::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'brand' => $request->brand,
            'country' => $request->country,
            'year' => $request->year,
            'alcohol_percentage' => $request->alcohol_percentage,
            'price' => $request->price,
            'rating' => $request->rating,
            'description' => $request->description,
            'image' => $imgPath
        ]);
        return redirect()->route('admin.wines.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wine = Wine::findOrFail($id);
        $categories = Category::all();
        return view('admin.wines.edit', compact('wine', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $wine = Wine::findOrFail($id);
        $imagePath = $wine->image;
        if ($request->hasFile('image')) {

            if ($wine->image) {
                Storage::disk('public')->delete($wine->image);
            }

            $imagePath = $request->file('image')->store('wines', 'public');
        }
        $wine->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'brand' => $request->brand,
            'country' => $request->country,
            'year' => $request->year,
            'alcohol_percentage' => $request->alcohol_percentage,
            'price' => $request->price,
            'rating' => $request->rating,
            'description' => $request->description,
            'image' => $imagePath
        ]);
        return redirect()->route('admin.wines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wine = Wine::findOrFail($id);
        $wine->delete();
        return redirect()->route('admin.wines.index');
    }
}
