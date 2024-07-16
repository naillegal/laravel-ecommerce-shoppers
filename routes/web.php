<?php

use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageHomeController::class,'index'])->name('home');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/products',[PageController::class,'products'])->name('products');
Route::get('/product-detail',[PageController::class,'product_detail'])->name('product_detail');
Route::get('/basket',[PageController::class,'basket'])->name('basket');
Route::get('/men',[PageController::class,'men'])->name('men');
Route::get('/women',[PageController::class,'women'])->name('women');
Route::get('/children',[PageController::class,'children'])->name('children');
