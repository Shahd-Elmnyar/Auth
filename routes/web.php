<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

//authentications routes
//register routes

Route::get('/register',[AuthController::class, 'registerForm'])->middleware(["guest"]) ;
Route::post('/register',[AuthController::class, 'register'])->middleware(["guest"]) ;

//login routes

Route::get('/login',[AuthController::class, 'loginForm'])->middleware(["guest"])->name('login');
Route::post('/login',[AuthController::class, 'login'])->middleware(["guest"]) ;

//logout route

Route::get('/logout',[AuthController::class, 'logout'])->middleware(["auth"]) ;

//profile routes

Route::get('/profile',[ProfileController::class, 'index'])->middleware(["auth"]) ;
