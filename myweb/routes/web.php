<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/news',[PagesController::class,'news'])->name('news');
Route::middleware(['auth'])->get('/panel',[PagesController::class,'panel'])->name('panel');



Route::middleware(['auth'])->post('/change-email',[UserController::class,'update'])->name('change_email');

require __DIR__.'/auth.php';



