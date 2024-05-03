<?php

use App\Http\Controllers\AuthManager;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthManager::class, 'login'])->name('login.view');

Route::post('/login',[AuthManager::class, 'loginPost'])->name('login.post');


Route::get('/register',[AuthManager::class,'register'])->name('register.view');

Route::post('/register',[AuthManager::class,'registerPost'])->name('register.post');


Route::get('/dashBoard', function(){
    return view('dashboard');
})->name('dashboard');

