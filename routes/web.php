<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\WineController;
use App\Http\Controllers\User\CollectionController;
use App\Http\Controllers\User\WineGuideController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\ProfileController;


/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/wines', [WineController::class,'index'])->name('wines');

Route::get('/collections', [CollectionController::class,'index'])->name('collections');

Route::get('/wine-guide', [WineGuideController::class,'index'])->name('wine-guide');

Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/contact', [ContactController::class,'index'])->name('contact');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';