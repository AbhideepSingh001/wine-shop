<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wine;
use App\Models\Category;
use App\Models\Contact;
use App\models\WineGuide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWines = Wine::count();
        $totalCategories = Category::count();
        $totalGuides = WineGuide::count();
        $totalContacts = Contact::count();

        return view('admin.dashboard', compact(
            'totalWines',
            'totalCategories',
            'totalGuides',
            'totalContacts'
        )); 
    }
}
