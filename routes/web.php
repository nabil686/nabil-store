<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class, 'home'])->name('dashboard');

Route::get('/login',[LoginController::class,'login'])->name('admin.login');
Route::post('/do-login',[LoginController::class,'Dologin'])->name('admin.dologin');
Route::get('/logout',[LoginController::class,'logout'])->name('signout');


// Category

Route::get('/create-category',[CategoryController::class,'create_category'])->name('create.category');
Route::get('/category-form',[CategoryController::class,'category_form']);
Route::post('/category-store',[CategoryController::class,'category_store']);

// Product 

Route::get('/product-list',[ProductController::class,'productList'])->name('product.list');
Route::get('/product-form',[ProductController::class,'productForm']);
Route::post('/product-store',[ProductController::class,'productStore']);



