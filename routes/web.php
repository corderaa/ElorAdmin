<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        if ( Auth::user()->userType_id == 1) // use Auth::check instead of Auth::user
        {
            //return view('/admin/index');
            return redirect()->route('users.adminIndex');
        } else {
            return redirect()->route('users.studentIndex');
        }
    }); 

    Route::controller(UserController::class)->group(function(){
        Route::get('/admin','adminIndex')->name('users.adminIndex');
        Route::get('/users','studentIndex')->name('users.studentIndex');
    });
    
});
Auth::routes();