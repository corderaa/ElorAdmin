<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        if ( Auth::user()->userType_id == 1) // use Auth::check instead of Auth::user
        {
            return redirect()->route('users.adminIndex');
        } else {
            return redirect()->route('users.studentIndex');
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
    Route::resources(['studies' => StudyController::class]);
    Route::resources(['subjects' => SubjectController::class]);
    Route::resources(['roles' => UserTypeController::class]);
});
Auth::routes();
