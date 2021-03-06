<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TopRankController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('/market',[MarketController::class,'index']);
Route::get('/login',[AccountController::class,'loginPage']);
Route::post('/login',[AccountController::class,'loginAction'])->name('loginAction');
Route::post('/register',[AccountController::class,'registerAction'])->name('registerAction');
Route::get('/register',[AccountController::class,'registerPage']);
Route::get('/wallet',[WalletController::class,'index']);
Route::post('/buy-coin',[TransactionController::class,'buyCoin']);
Route::get('/get-wallet',[TransactionController::class,'userWallet']);
Route::get('top-rank',[TopRankController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/news',[NewsController::class,'index']);
Route::get('/logout',[AccountController::class,'logout']);

Route::post('/sell-coin',[TransactionController::class,'sellCoin']);

Route::get('/profile',[ProfileController::class,'index']);

Route::post('/update-profile',[ProfileController::class,'updateProfile'])->name('update-profile');
Route::post('/upload-message',[ContactController::class,'uploadMessage'])->name('upload-message');

