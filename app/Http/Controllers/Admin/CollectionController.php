<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Wine;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    public function index(){
        $collections = Collection::latest()->get();
        return view('admin.collections.index', compact('collections'));
    }

    public function create(){
        $wines = Wine::all();
        return view('admin.collections.create', compact('wines'));
    }

    public function store(Request $request){

        $imgPath = null;

        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('collections', 'public');
        }

        $collection = Collection::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'image'=>$imgPath
        ]);

        if($request->wines){
            $collection->wines()->sync($request->wines);
        }

        return redirect()->route('admin.collections.index');
    }

    public function edit($id){
        $collection = Collection::findOrFail($id);
        $wines = Wine::all();
        return view('admin.collections.edit', compact('collection','wines'));
    }

    public function update(Request $request,$id){

        $collection = Collection::findOrFail($id);

        $imgPath = $collection->image;

        if($request->hasFile('image')){
            $imgPath = $request->file('image')->store('collections','public');
        }

        $collection->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'description'=>$request->description,
            'image'=>$imgPath
        ]);

        if($request->wines){
            $collection->wines()->sync($request->wines);
        }

        return redirect()->route('admin.collections.index');
    }

    public function destroy($id){

        $collection = Collection::findOrFail($id);
        $collection->delete();

        return redirect()->route('admin.collections.index');
    }
}