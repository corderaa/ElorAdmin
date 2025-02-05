<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\StudyController;
use App\Http\Controllers\API\SubjectController;
use App\Http\Controllers\API\UserTypeController;
use App\Http\Controllers\API\MeetingController;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::prefix('v1.0')->group(function () {
        Route::apiresources([
            'users' => UserController::class,
        ]);
        Route::apiresources([
            'studies' => StudyController::class,
        ]);
        Route::apiresources([
            'subjects' => SubjectController::class,
        ]);
        Route::apiresources([
            'usertypes' => UserTypeController::class,
        ]);
        Route::apiresources([
            'meetings' => MeetingController::class,
        ]);
    });

});

Route::prefix('v2.0')->group(function () {

    Route::apiresources([
        'studies' => StudyController::class
    ]);

});




