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




    /*
    |--------------------------------------------------------------------------
    | Website Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/wines', [WineController::class, 'index'])->name('wines');

    Route::get('/collections', [CollectionController::class, 'index'])->name('collections');

    Route::get('/wine-guide', [WineGuideController::class, 'index'])->name('wine-guide');

    Route::get('/about', [AboutController::class, 'index'])->name('about');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    
    Route::get('/wines/{wine}', [WineController::class,'show'])->name('wines.show');


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
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::resource('wines', AdminWineController::class);

    Route::resource('categories', CategoryController::class);

    Route::resource('wineGuides', AdminWineGuideController::class);

    Route::resource('collections', AdminCollectionController::class);
    
    Route::resource('banners', BannerController::class);
});
    require __DIR__ . '/auth.php';
