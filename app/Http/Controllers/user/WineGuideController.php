<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class WineGuideController extends Controller
{
    public function index()
    {
        return view('pages.wine-guide');
    }
}