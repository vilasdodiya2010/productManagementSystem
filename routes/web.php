<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/supplierList', [App\Http\Controllers\SupplierController::class, 'supplierList'])->name('supplierList');
Route::get('/productsList', [App\Http\Controllers\ProductController::class, 'index'])->name('productsList');
Route::resource('products',App\Http\Controllers\ProductController::class);