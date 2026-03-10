<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function create(){
                return view('admin.categories.create');

    }

    public function store(Request $request){
        Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name), 
            'description'=>$request->description
        ]);
        return redirect()->route('admin.categories.index');
    }

    public function edit($id){
        $category = Category::findOrfail($id);
        return view ('admin.categories.edit', compact('category'));
    }

    public function update (Request $request, $id){
        $category = Category::findOrFail($id);
        $category->update([
            'name'=>$request->name,
            'slug'=>str::slug($request->name),
            'description'=>$request->description
        ]);
        return redirect()->route('admin.categories.index');
    }

    public function destroy($id){
        $category= category::FindOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories.index');
    }

}
