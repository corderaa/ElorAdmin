<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        switch(Auth::user()->userType_id){
            case 1:
                return redirect()->route('users.adminIndex');
            break;
            case 2:
                return redirect()->route('users.adminIndex');
            break;
            case 3:
                return redirect()->route('users.teacherIndex');
            break;          
            case 4:
                return redirect()->route('users.studentIndex');
            break;
            default:
            
        }
    }); 

    Route::controller(UserController::class)->group(function(){
        Route::get('/admin','adminIndex')->name('users.adminIndex');
        Route::get('/users','studentIndex')->name('users.studentIndex');
        Route::get('/teacher', 'teacherIndex')->name('users.teacherIndex');
    });
    
});
Auth::routes();