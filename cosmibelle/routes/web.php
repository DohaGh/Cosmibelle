<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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
Route::get('/',[MyController::class,'welcome']);
Route::get('/produit',[MyController::class,'produit']);
Route::get('/show',[MyController::class,'show']);
Route::post('/store',[MyController::class,'store']);
Route::get('/contact',[MyController::class,'contact']);
Route::get('/categorie',[MyController::class,'categorie']);
Route::get('/index',[MyController::class,'index']);
Route::get('/show/{produit}', [MyController::class, 'show'])->name('show');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/produit', [App\Http\Controllers\MyController::class, 'createC'])->name('createC');