<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//authentication routes
Route::get('/',[UserController::class,'login'])->name('login');
Route::post('/loginpost',[UserController::class,'loginpost'])->name('loginpost');
Route::get('register/',[UserController::class,'register'])->name('register');
Route::post('registerpost/',[UserController::class,'registerpost'])->name('registerpost');
Route::get('/logout',[UserController::class,'logout'])->name('logout');



// admin routes
Route::get('add/',[AdminController::class,'add'])->name('add');
Route::post('addpost/',[AdminController::class,'addpost']);
Route::get('all/',[AdminController::class,'all_products'])->name('all');
Route::get('deleteproduct/{id}',[AdminController::class,'deleteproduct'])->name('deleteproduct');
Route::get('update/{id}',[AdminController::class,'update'])->name('update');
Route::put('updatepost/{id}',[AdminController::class,'updatepost'])->name('updatepost');


//users routes
Route::group(['middleware'=>'auth'],function(){
    Route::get('products/',[ProductController::class,'products'])->name('products');
    Route::get('cart/',[ProductController::class,'cart'])->name('cart');
    Route::post('cartpost/',[ProductController::class,'cartpost'])->name('cartpost');
});
