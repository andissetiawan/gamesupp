<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
// =================================================================
//                      VIEW    CONTROLLER
// =================================================================
Route::get('/', [ViewController::class,'main']) ;
Route::get('/masuk',[ViewController::class,'login'])->middleware('guest');
Route::get('/daftar',[ViewController::class,'register'])->middleware('guest');
Route::get('/otp', function () {
    return view('otp');
});
Route::get('/pencarian', function () {
    return view('pencarian');
});

// =================================================================
//                     LOGIN REG LOGOUT
// =================================================================
Route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
Route::post('/proseslogin',[LoginController::class,'proseslogin'])->name('proseslogin');
Route::post('/proseslogout',[LoginController::class,'proseslogout']);

// =================================================================
//                     PRODUCT CONTROLLER
// =================================================================
Route::get('/search',[ProductController::class,'search']);
