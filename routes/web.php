<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/products',[ProductController::class,'Index'])->name(name: 'allProduct');
Route::get('/products/create',[ProductController::class,'Create'])->name(name: 'createProduct');
Route::post('/products',[ProductController::class,'Store'])->name(name: 'storeProduct');
Route::get('/products/{id}',[ProductController::class,'Product'])->name(name: 'singleProduct');
Route::get('/products/{id}/edit',[ProductController::class,'singleProductEdit'])->name(name: 'productEdit');
Route::put('/products/{id}',[ProductController::class,'productUpdate'])->name('updateProduct');
Route::delete('/products/{id}',[ProductController::class,'productDelete'])->name('deleteProduct');
