<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ForgotPasswordController;


Route::get('/',[IndexController::class, 'index'])->name('/');
Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::get('/signUp',[SignupController::class, 'signUp'])->name('signUp');
Route::get('/forgotPassword',[ForgotPasswordController::class, 'forgotPassword'])->name('forgotPassword');


