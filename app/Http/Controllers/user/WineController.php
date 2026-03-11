<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;
use App\Models\Category;

class WineController extends Controller
{
    public function index(Request $request)
    {

        $query = Wine::query();

        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        if ($request->search) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        if ($request->sort == 'low') {
            $query->orderBy('price', 'asc');
        }

        if ($request->sort == 'high') {
            $query->orderBy('price', 'desc');
        }

        $wines = $query->get();

        $categories = Category::all();

        return view('pages.wines', compact('wines', 'categories'));
    }
}
