<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/',[IndexController::class, 'index'])->name('/');
Route::get('/userHomePage',[IndexController::class, 'userHomePage'])->name('userHomePage');
Route::get('/login',[IndexController::class, 'login'])->name('login');
Route::post('/login',[IndexController::class, 'loginCheck'])->name('login');
Route::get('/signUp',[IndexController::class, 'signUp'])->name('signUp');
Route::post('/signUp',[IndexController::class, 'saveUser'])->name('signUp');
Route::get('/forgotPassword',[IndexController::class, 'forgotPassword'])->name('forgotPassword');


