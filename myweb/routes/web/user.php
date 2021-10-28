<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::middleware(['auth'])->post('/user/change-email',[UserController::class,'update'])->name('change_email');

// Route::middleware(['auth'])->group(function () {

//     Route::post('/user/change-email',[UserController::class,'update'])->name('change_email');

// });

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'user',
        'as'=>'user.',
    ],
    function () {
        Route::post('update', [UserController::class,'update'])->name('update');
        Route::post('update-email', [UserController::class,'updateEmail'])->name('update.email');
        Route::post('update-password', [UserController::class,'updatePassword'])->name('update.password');


});
