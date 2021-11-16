<?php

use App\Http\Controllers\Pages\ProjectController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel/project',
        'as'=>'project',
    ],
    function () {
        Route::get('create',[ProjectController::class,'create'])->name('.create');
        Route::post('store',[ProjectController::class,'store'])->name('.store');
        Route::delete('delete/{project}',[ProjectController::class,'destroy'])->name('.delete')->where('project','[A-Za-z0-9]+');
    }
);

Route::get('projects',[ProjectController::class,'index'])->name('projects');
