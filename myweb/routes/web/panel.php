<?php

use App\Http\Controllers\Pages\PanelController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware'=>'auth',
        'prefix'=>'panel',
        'as'=>'panel',

    ],
    function () {
        Route::get('/',[PanelController::class,'index']);
        Route::get('profile',[PanelController::class,'profile'])->name('.profile');
    }
 );



