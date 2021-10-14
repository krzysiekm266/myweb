<?php

use App\Http\Controllers\StorageController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/panel/storage/create',[StorageController::class,'create'])->name('storage.create');
    Route::post('/panel/storage/add-image',[StorageController::class,'store'])->name('storage.store');

});
