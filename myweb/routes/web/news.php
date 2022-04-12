<?php

use App\Http\Controllers\Pages\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel/news',
        'as'=>'news.',
    ],
    function (){

        // Route::match(['get', 'post'], 'create', [NewsController::class, 'create'])->name('.create');
        // Route::match(['get','post'], 'edit/{news}', [NewsController::class, 'edit'])->name('.edit')->where('news','[A-Za-z0-9]+');

        Route::get('create', [NewsController::class, 'create'])->name('create');
        Route::post('create', [NewsController::class, 'create'])->name('create');
        Route::post('edit/{news}', [NewsController::class, 'edit'])->name('edit')->where('news','[A-Za-z0-9]+');
        Route::get('edit/{id}', [NewsController::class, 'editBack'])->name('edit.back')->where('id','[0-9]+');;

        Route::post('store', [NewsController::class,'store'])->name('store');
        Route::delete('delete/{news}', [NewsController::class,'destroy'])->name('delete')->where('news','[A-Za-z0-9]+');
        //Route::patch('update/{news}', [NewsController::class, 'update'])->name('update')->where('news','[A-Za-z0-9]+');
        Route::patch('update/{id}', [NewsController::class, 'update'])->name('update')->where('id','[0-9]+');


    }

);
 Route::get('news', [NewsController::class,'index'])->name('news');






