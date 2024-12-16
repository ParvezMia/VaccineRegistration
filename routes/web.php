<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use LDAP\Result;

Route::get('/',[RegisterController::class, 'index']);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class,'store'])->name('register');
});

Route::post('/webhook', [RegisterController::class, 'post'])->name('webhook');