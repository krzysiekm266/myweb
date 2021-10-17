<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


// Route::middleware(['auth'])->get('/panel',[PagesController::class,'panel'])->name('panel');
// Route::middleware(['auth'])->get('/panel/news/create',[NewsController::class,'create'])->name('news.create');

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel'
    ],
    function () {
        Route::get('/profile',[PagesController::class,'panel'])->name('panel');
    }
);



