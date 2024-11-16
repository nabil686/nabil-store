<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'home']);

// Category

Route::get('/create-category',[CategoryController::class,'create_category'])->name('create.category');
Route::get('/category-form',[CategoryController::class,'category_form']);
Route::post('/category-store',[CategoryController::class,'category_store']);

// Product 

Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product-form',[ProductController::class,'productForm']);
Route::post('/product-store',[ProductController::class,'productStore']);



