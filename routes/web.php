<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\fontend\HomeController;
use App\Http\Controllers\fontend\ProductController;
use App\Http\Controllers\fontend\ContactController;

Route::get('/', [HomeController::class,'index'])->name('site.home');
Route::get('san-pham', [ProductController::class,'index'])->name('site.product');
Route::get('chi tiet-san pham/{slug}', [ProductController::class,'detall'])->name('site.product.detail');
Route::get('lien-he', [ContactController::class,'index'])->name('site.contact');
