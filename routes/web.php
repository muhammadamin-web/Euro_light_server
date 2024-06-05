<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Interier_desingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StaticPagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// web.php
Route::get('/', function () {
    return redirect('/ru');
});
// Auth routes
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// boshqa kontrollerlar


Route::middleware(['locale'])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])->name('home')->where('locale', 'uz|ru');
    Route::get('/{locale}/products/{id}', [HomeController::class, 'show'])->name('show')->where(['locale' => 'uz|ru', 'id' => '[0-9]+']);

    Route::get('/uz/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/uz/register', [RegisterController::class, 'register']);
    // Statik sahifalar uchun route-lar
    Route::get('/{locale}/about', [StaticPagesController::class, 'about'])->name('about')->where('locale', 'uz|ru');
    Route::get('/{locale}/lyustra_v_tashkente', [StaticPagesController::class, 'lyustra_v_tashkente'])->name('lyustra_v_tashkente')->where('locale', 'uz|ru');
    // boshqa statik sahifalar

    // Dinamik sahifalar uchun route-lar
    // ... boshqa resurslar ...
    // Route::resource('/{locale}/product', ProductController::class);
    // Route::resource('/{locale}/project', ProjectController::class);
    // Route::resource('/{locale}/category', CategoryController::class);

    Route::get('/{locale}/project/', [ProjectController::class, 'index'])->name('project')->where(['locale' => 'uz|ru']);
    Route::get('/{locale}/project/{slug}', [ProjectController::class, 'show'])->name('project.show')->where(['locale' => 'uz|ru',]);
    
    Route::get('/{locale}/products/', [ProductController::class, 'index'])->name('product')->where(['locale' => 'uz|ru', ]);
    Route::get('/{locale}/product/{slug}', [ProductController::class, 'show'])->name('product.show');

    Route::get('/{locale}/interier-designs/', [Interier_desingController::class, 'index'])->name('interier_design')->where(['locale' => 'uz|ru', ]);
    Route::get('/{locale}/interier-design/{slug}', [Interier_desingController::class, 'show'])->name('interier_design.show');

    Route::get('/{locale}/category/', [CategoryController::class, 'index'])->name('category')->where(['locale' => 'uz|ru', ]);
    Route::get('/{locale}/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

});

Route::get('/switch/{locale}', [LanguageController::class, 'switchLanguage'])->name('locale.switch');


Route::get('/phpinfo', function () {
    phpinfo();
});