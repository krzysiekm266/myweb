<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth'])->prefix('/panel/news')->as('news.')->group(function(){
//     Route::get('/create',[NewsController::class,'create'])->name('create');
//     Route::post('/store',[NewsController::class,'store'])->name('store');
// });

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel/news',
        'as'=>'news.',
    ],
    function () {
        Route::match(['get','post'],'create',[NewsController::class,'create'])->name('create');
        Route::post('store',[NewsController::class,'store'])->name('store');
        Route::delete('delete/{news}',[NewsController::class,'destroy'])->name('delete');


    }
);

Route::get('/news/index',[NewsController::class,'index'])->name('news.all');




