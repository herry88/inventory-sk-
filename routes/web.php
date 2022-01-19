<?php

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
    return view('welcome');
});


Route::resource('category', \App\Http\Controllers\CategoryController::class);
Route::get('category/destroy/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');


Route::resource('mitra', \App\Http\Controllers\MitraController::class);
Route::get('mitra/destroy/{id}', [\App\Http\Controllers\MitraController::class, 'destroy'])->name('mitra.destroy');

Route::resource('product', App\Http\Controllers\ProductController::class);
Route::get('product/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
