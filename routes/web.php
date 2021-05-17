<?php

use App\Http\Controllers\BrandController;
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
    return view('main');
});

Route::get('support', function () {
    return view('support');
});

Route::get('category/{category}', [BrandController::class, 'index']);

Route::get('category/{category}/{brand}', [ProductController::class, 'index']);

Route::get('category/{category}/{brand}/product/{id}',
           [ProductController::class, 'getProduct']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

