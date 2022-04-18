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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product/register', [productController::class, 'register'])->name('product/registerar');
Route::post('/product/register', [productController::class, 'store']);
//Route::get('/product.list', [productController::class, 'getall'])->name('product/register');