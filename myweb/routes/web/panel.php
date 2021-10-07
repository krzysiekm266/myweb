<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth'])->get('/panel',[PagesController::class,'panel'])->name('panel');
// Route::middleware(['auth'])->get('/panel/news-editor',[PagesController::class,'editNews'])->name('news.editor');
Route::middleware(['auth'])->get('/panel/news/create',[NewsController::class,'create'])->name('news.create');



