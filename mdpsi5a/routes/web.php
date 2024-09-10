<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('view_home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});

});