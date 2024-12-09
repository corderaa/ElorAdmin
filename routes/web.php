<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        if ( Auth::user()->userType_id == 1) // use Auth::check instead of Auth::user
        {
            return view('/admin');
        } else {
            return view('/home');
        }
    }); 

    Route::resources([
        'users' => UserController::class,
    ]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
