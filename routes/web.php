<?php
    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserTypeController;
use App\Http\Controllers\MeetingUserUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [UserController::class, 'adminIndex'])->name('users.adminIndex');
    Route::get('/student', [UserController::class, 'getAllStudent'])->name('users.getAllStudents');
    Route::get('/staff', [UserController::class, 'getStaff'])->name('users.getStaff');
    Route::resource('users', UserController::class);
    Route::resource('studies', StudyController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('roles', UserTypeController::class);
    Route::resource('meetings', MeetingUserUserController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return Auth::user()->userType_id == 1 || Auth::user()->userType_id == 2
            ? redirect()->route('users.adminIndex')
            : redirect()->route('users.studentIndex');
    });
        
    Route::resources(['users' => UserController::class]);
    Route::resources(['studies' => StudyController::class]);
    Route::resources(['subjects' => SubjectController::class]);
    Route::resources(['roles' => UserTypeController::class]);
    Route::resources(['meeting_user_user' => MeetingUserUserController::class]);
    
    Route::get('/users', [UserController::class, 'studentIndex'])->name('users.studentIndex');

});

Auth::routes();