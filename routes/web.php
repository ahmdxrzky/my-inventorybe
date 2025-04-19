<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index']);

// Route::middleware(['auth.basic'])->group(function () {
    // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // Route::post('/product', [ProductController::class, 'store'])->name('products.store');
    // Route::get('/product/edit/{id}', [ProductController::class, 'show'])->name('products.show');
    // Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
    // Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// });
