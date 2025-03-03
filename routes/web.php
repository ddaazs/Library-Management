<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('guest')->group(function(){
    Route::get('/login', [LoginController::class,'login'])->name('login');
    Route::get('/register',[RegisterController::class,'register'])->name('register');
    Route::post('/register',[RegisterController::class,'store'])->name('register.store');
});

