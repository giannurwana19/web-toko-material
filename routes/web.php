<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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
    Route::get('dashboard', [DashboardController::class, 'index']);

    // categories
    Route::resource('categories', CategoryController::class)->scoped(['category' => 'slug'])->except('show');
    // brands
    Route::resource('brands', BrandController::class)->scoped(['brand' => 'slug'])->except('show');
    // products
    Route::resource('products', ProductController::class)->scoped(['product' => 'slug']);
    // sliders
    Route::resource('sliders', SliderController::class)->except('show');
});

Route::fallback(function () {
    abort(404);
});
