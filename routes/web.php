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

Route::get('/',[CrudController::class,'index'])->name('home');

// Create page route
Route::get('/create',[CrudController::class,'create'])->name('create');

Route::get('/show/{id}',[CrudController::class,'show'])->name('show');

Route::post('/destroy/{id}',[CrudController::class,'destroy']);

Route::get('/edit/{id}',[CrudController::class,'edit'])->name('edit');

// Store data using form 
Route::post('/store',[CrudController::class,'store'])->name('store');
// Auth
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registration',[AuthController::class,'registration'])->name('registration');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/postLogin',[AuthController::class,'postLogin'])->name('postLogin');

