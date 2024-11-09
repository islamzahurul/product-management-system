<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class,'index'])->name('products.index');
Route::resource('products', ProductController::class); 
Route::get('/create',[ProductController::class,'create'])->name('products.create');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');  
Route::post('products', [ProductController::class, 'store'])->name('products.store');