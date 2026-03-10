<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wine;

class WineController extends Controller
{

    public function index()
    {
        $wines = Wine::with('category')->latest()->paginate(12);

        return view('pages.wines', compact('wines'));
    }


    public function show(Wine $wine)
    {
        return view('pages.wine-details', compact('wine'));
    }

}