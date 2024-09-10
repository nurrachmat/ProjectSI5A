<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login.form');

Route::post('/login', [LoginController::class, 'login'])->name('login');
