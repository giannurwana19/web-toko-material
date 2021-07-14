<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.frontend.app');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // categories
    Route::resource('categories', CategoryController::class)->scoped(['category' => 'slug'])->except('show');
    // brands
    Route::resource('brands', BrandController::class)->scoped(['brand' => 'slug'])->except('show');
    // products
    Route::resource('products', ProductController::class)->scoped(['product' => 'slug']);
    // sliders
    Route::resource('sliders', SliderController::class)->except('show');
    // profile
    Route::get('profiles', [ProfileController::class, 'index'])->name('profiles.index');
    Route::get('profiles/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
    Route::patch('profiles', [ProfileController::class, 'update'])->name('profiles.update');
});

Route::fallback(function () {
    abort(404);
});
