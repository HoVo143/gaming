<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [HomeController::class , 'index'])->name('home');
//account
Route::get('/account' , [HomeController::class , 'account'])->name('account');


//products
Route::get('/gaming-mouse' , [ProductController::class , 'mouse'])->name('product.mouses');
Route::get('/gaming-laptop' , [ProductController::class , 'laptop'])->name('product.laptop');
Route::get('/gaming-keyboard' , [ProductController::class , 'keyboard'])->name('product.keyboard');
Route::get('/gaming-monitor' , [ProductController::class , 'monitor'])->name('product.monitor');
Route::get('/gaming-headset' , [ProductController::class , 'headset'])->name('product.headset');



Route::get('/product-detail' , [HomeController::class , 'productDetail'])->name('product.detail');


//login
Route::get('/login', [UserController::class, 'logininterface'])->name('login.interface');
Route::post('/login', [UserController::class, 'login'])->name('login');
//logout
Route::post('/logout', [UserController::class, 'logout'])->name('logout');



