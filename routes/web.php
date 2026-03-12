<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Controllers
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\WineController;
use App\Http\Controllers\User\CollectionController;
use App\Http\Controllers\User\WineGuideController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\Admin\WineController as AdminWineController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WineGuideController as AdminWineGuideController;
use App\Http\Controllers\Admin\CollectionController as AdminCollectionController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\WishlistController as AdminWishlistController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;


/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wines', [WineController::class, 'index'])->name('wines.index');
Route::get('/wines/{wine}', [WineController::class, 'show'])->name('wines.show');

Route::get('/collections', [CollectionController::class, 'index'])->name('collections');

Route::get('/wine-guide', [WineGuideController::class, 'index'])->name('wine-guide');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


/*
|--------------------------------------------------------------------------
| Wishlist Routes (User)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/wishlist', [WishlistController::class, 'index'])
        ->name('wishlist.index');

    Route::post('/wishlist/add/{id}', [WishlistController::class, 'add'])
        ->name('wishlist.add');

    Route::delete('/wishlist/remove/{id}', [WishlistController::class, 'remove'])
        ->name('wishlist.remove');
});


/*
|--------------------------------------------------------------------------
| Orders (User)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/orders', [OrderController::class, 'index'])
    ->name('orders.index');

    Route::post('/orders/place/{id}', [OrderController::class, 'place'])
        ->name('orders.place');
});


/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.')
    ->group(function () {

        /* Dashboard */
        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        /* Wines */
        Route::resource('wines', AdminWineController::class);

        /* Categories */
        Route::resource('categories', CategoryController::class);

        /* Collections */
        Route::resource('collections', AdminCollectionController::class);

        /* Orders */
        Route::get('/orders', [AdminOrderController::class, 'index'])
            ->name('orders.index');
        Route::patch('/orders/status/{id}', [AdminOrderController::class, 'updateStatus'])
            ->name('orders.status');

        Route::delete('/orders/{id}', [AdminOrderController::class, 'destroy'])
            ->name('orders.delete');

        /* Banners */
        Route::resource('banners', BannerController::class);

        /* Wine Guides */
        Route::resource('wineGuide', AdminWineGuideController::class);

        /* Wishlist (Admin View) */
        Route::get('/wishlist', [AdminWishlistController::class, 'index'])
            ->name('wishlist.index');

        /* Contact Messages */
        Route::get('/contacts', [AdminContactController::class, 'index'])
            ->name('contacts.index');

        Route::get('/contacts/{id}', [AdminContactController::class, 'show'])
            ->name('contacts.show');

        Route::delete('/contacts/{id}', [AdminContactController::class, 'destroy'])
            ->name('contacts.delete');

        /* Contact Settings */
        Route::get('/settings', [SettingController::class, 'edit'])
            ->name('settings.edit');

        Route::post('/settings', [SettingController::class, 'update'])
            ->name('settings.update');
    });


/*
|--------------------------------------------------------------------------
| Role Management
|--------------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->name('admin.roles.')
    ->group(function () {

        Route::get('/roles', [RoleController::class, 'index'])
            ->name('index');

        Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])
            ->name('edit');

        Route::put('/roles/{id}', [RoleController::class, 'update'])
            ->name('update');
    });


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';
