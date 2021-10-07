<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->group(function () {
    // Route::get('/news/create',[NewsController::class,'create'])->name('news.create');
    Route::post('/news/store',[NewsController::class,'store'])->name('news.store');
});


