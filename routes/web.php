<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'sitesetting'], function () {
    Route::get('/', [PageHomeController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/products/{category?}', [PageController::class, 'products'])->name('products');
    Route::get('/product/{slug}', [PageController::class, 'product_detail'])->name('product_detail');
    Route::get('/basket', [CartController::class, 'basket'])->name('basket');
    Route::post('/basket/add', [CartController::class, 'add'])->name('basket_add');
    Route::post('/basket/remove', [CartController::class, 'remove'])->name('basket_remove');
    Route::get('/men/{slug?}', [PageController::class, 'products'])->name('men');
    Route::get('/women/{slug?}', [PageController::class, 'products'])->name('women');
    Route::get('/children/{slug?}', [PageController::class, 'products'])->name('children');
    Route::get('/discount-products', [PageController::class, 'discount_products'])->name('discount_products');
    Route::get('/products/{category}/{subcategory}', [PageController::class, 'products'])->name('subcategory.products');
    Route::post('/contact/form', [AjaxController::class, 'ContactForm'])->name('contact_form');
});
