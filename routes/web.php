<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class,'index'])->name('products');
// Route::get('/create',[ProductController::class,'create'])->name('create');
Route::post('/create',[ProductController::class,'store'])->name('store');


