<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        if ( Auth::user()->userType_id == 1) // use Auth::check instead of Auth::user
        {
            return redirect()->route('users.adminIndex');
        } else {
            return redirect()->route('users.index');
        }

    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/admin','adminIndex')->name('users.adminIndex');
        Route::get('/users','studentHome')->name('users.studentIndex');
        //Route::get('/users','show')->name('users.show');
        Route::get('/admin/student', 'getAllStudent')->name('users.getAllStudents');
        Route::get('/admin/staff', 'getStaff')->name('users.getStaff');

    });
    Route::resources(['users' => UserController::class]);
});
Auth::routes();
