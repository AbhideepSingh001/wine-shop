<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
{
    $collections = Collection::all();

    return view('pages.collections', compact('collections'));
}
}