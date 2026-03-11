<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\WineController;
use App\Http\Controllers\User\CollectionController;
use App\Http\Controllers\User\WineGuideController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;

use App\Http\Controllers\Admin\WineController as AdminWineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WineGuideController as AdminWineGuideController;
use App\Http\Controllers\Admin\CollectionController as AdminCollectionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\WishlistController as AdminWishlistController;

use App\Http\Controllers\WishlistController;


/*
|--------------------------------------------------------------------------
| Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wines', [WineController::class, 'index'])->name('wines.index');

Route::get('/wines/{wine}', [WineController::class, 'show'])->name('wines.show');

Route::get('/collections', [CollectionController::class, 'index'])->name('collections');

Route::get('/wine-guide', [WineGuideController::class, 'index'])->name('wine-guide');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


/*
|--------------------------------------------------------------------------
| Wishlist Route (User Side)
|--------------------------------------------------------------------------
*/

Route::post('/wishlist/add/{id}', [WishlistController::class,'add'])->name('wishlist.add');


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
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('wines', AdminWineController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('collections', AdminCollectionController::class);

    Route::resource('banners', BannerController::class);

    Route::resource('wineguides', AdminWineGuideController::class);

    Route::get('/wishlist', [AdminWishlistController::class,'index'])->name('wishlist.index');

});


require __DIR__ . '/auth.php';