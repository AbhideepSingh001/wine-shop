<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Wine;

class HomeController extends Controller
{
    public function index()
    {

        // Categories (3 show on home page)
        $categories = Category::take(3)->get();

        // Collections (2 banners)
        $collections = Collection::take(2)->get();

        // Featured Wines (4 products)
        $featuredWines = Wine::latest()->take(4)->get();

        return view('pages.index', compact(
            'categories',
            'collections',
            'featuredWines'
        ));
    }
}