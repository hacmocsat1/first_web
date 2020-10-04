<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Default
use App\Http\Controllers\HomeController;
Route::get('/', 		[HomeController::class,'index']);
Route::get('/Home', 	[HomeController::class,'index']);

//Admin
use App\Http\Controllers\AdminController;
Route::get('/admin', 			[AdminController::class,'index']);
Route::get('/dashboard', 		[AdminController::class,'show']);
Route::post('/admin_dashboard', [AdminController::class,'dashboard']);
Route::get('/logout', 			[AdminController::class,'logout']);

//Category Product
use App\Http\Controllers\CategoryProduct;
Route::get('/add_category_product', 			[CategoryProduct::class,'Add']);
Route::get('/all_category_product', 			[CategoryProduct::class,'All']);
Route::post('/save_category_product', 			[CategoryProduct::class,'Save']);


