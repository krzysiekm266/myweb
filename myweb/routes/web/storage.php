<?php

use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth'])->group(function () {
//     Route::get('/panel/storage/create',[StorageController::class,'create'])->name('storage.create');
//     Route::post('/panel/storage/add-image',[StorageController::class,'store'])->name('storage.store');
//     Route::post('/panel/storage/delete',[StorageController::class,'destroy'])->name('storage.delete');


// });

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel/storage',
        'as'=>'storage',
    ],
    function () {
        Route::get('create',[StorageController::class,'create'])->name('.create');
        Route::post('add-image',[StorageController::class,'store'])->name('.store');
        Route::post('delete',[StorageController::class,'destroy'])->name('.delete')->middleware('isImageRegistered:img_path');

});
