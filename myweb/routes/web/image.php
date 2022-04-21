<?php
/** image
 *
*/

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'middleware' =>'auth',
        'prefix' => 'image',
        'as' => 'image.',
    ],
    function (){
        Route::patch('/', [ImageController::class,'index'])->name('index');
        Route::post('/', [ImageController::class,'index'])->name('index');
        Route::post('/select', [ImageController::class,'select'])->name('select');
        Route::post('/confirm', [ImageController::class,'selectConfirm'])->name('confirm');
        // Route::get('/confirm', [ImageController::class,'selectConfirm'])->name('confirm');


    }
);

