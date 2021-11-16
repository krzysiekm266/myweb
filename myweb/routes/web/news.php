<?php

use App\Http\Controllers\Pages\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel/news',
        'as'=>'news',
    ],
    function () {

        Route::match(['get','post'],'create',[NewsController::class,'create'])->name('.create');
        Route::post('store',[NewsController::class,'store'])->name('.store');
        Route::delete('delete/{news}',[NewsController::class,'destroy'])->name('.delete')->where('news','[A-Za-z0-9]+');
        Route::patch('update/{news}',[NewsController::class,'update'])->name('.update')->where('news','[A-Za-z0-9]+');
        Route::post('edit/{news}',[NewsController::class,'edit'])->name('.edit')->where('news','[A-Za-z0-9]+');
    }

);

 Route::get('news',[NewsController::class,'index'])->name('news');




