<?php

use App\Http\Controllers\Pages\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('about',[AboutController::class,'index'])->name('about');
