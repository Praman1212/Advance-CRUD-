<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AuthController;

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
Route::get('/',[AuthController::class,'login']);

Route::get('/home',[CrudController::class,'index'])->name('home-page');

// Create page route
Route::get('/create',[CrudController::class,'create'])->name('create');

Route::get('/show/{id}',[CrudController::class,'show'])->name('show-details');

Route::post('/destroy/{id}',[CrudController::class,'destroy']);

Route::get('/edit/{id}',[CrudController::class,'edit'])->name('edit-details');

// Store data using form 
Route::post('/store',[CrudController::class,'store'])->name('store');

Route::put('/update/{id}',[CrudController::class,'update']);
// Auth
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registration',[AuthController::class,'registration'])->name('registration-user');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/postLogin',[AuthController::class,'postLogin'])->name('postLogin-user');

