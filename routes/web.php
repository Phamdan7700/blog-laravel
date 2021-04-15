<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TypeNewsController;
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

// Route::resource('/', HomeController::class);

Route::prefix('admin')->group(function () {
    Route::resource('/', HomeController::class);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/type-news', TypeNewsController::class);
    Route::resource('/news', NewsController::class);

    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
