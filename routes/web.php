<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
// Welcome Route
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'displaycategories']);

Route::get('/hello/{slug}', [CategoryController::class, 'mount'])->name('cate');

Route::get('/single_product/{slug}', [ProductController::class, 'mount'])->name('single_pro');

//Try To Use Controller For Handling Routes Using Function home Which Returns the view('welcome')
//Route::get('/home', [HomeController::class, 'home']);

