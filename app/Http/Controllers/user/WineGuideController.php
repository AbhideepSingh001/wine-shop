<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WineGuide;


class WineGuideController extends Controller
{
    public function index()
{
    $types = WineGuide::where('type','types')->get();

    $tasting = WineGuide::where('type','tasting')->get();

    $tips = WineGuide::where('type','tips')->get();

    return view('pages.wine-guide', compact('types','tasting','tips'));
}
}
    