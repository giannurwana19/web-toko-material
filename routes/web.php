<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
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
});

Route::fallback(function () {
    abort(404);
});
