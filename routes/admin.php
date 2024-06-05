<?php

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\Interier_designController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Login and Logout routes
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Admin routes
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

        Route::get('/', function () {
            return redirect('admin/products');
        });

        Route::resource('/products', ProductController::class);
        Route::resource('/categories', CategoryController::class);
        Route::resource('/projects', ProjectController::class);
        Route::resource('/interier_designs', Interier_designController::class);
        Route::post('cseditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
    });
});
