<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', [UserController::class,'index'])->name('index');
Route::get('/signin', [UserController::class,'signin'])->name('signin.show');
Route::post('/signin', [AuthController::class,'signin'])->name('signin');
Route::get('/login', [UserController::class,'login'])->name('login.show');
Route::post('/login', [AuthController::class,'login'])->name('login');

Route::get('/admin/product', [ProductController::class,'index'])->name('product.index');
Route::get('/admin/product/add', [ProductController::class,'add'])->name('product.add');
Route::post('/admin/product/create', [ProductController::class,'create'])->name('product.create');
