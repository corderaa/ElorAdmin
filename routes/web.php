<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    $user = Auth::user();
    Route::get('/', function () {
        return view('home');
    }); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
