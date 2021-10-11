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
require __DIR__.'/breeze/auth.php';
require __DIR__.'/web/news.php';
require __DIR__.'/web/panel.php';
require __DIR__.'/web/storage.php';
require __DIR__.'/web/user.php';

Route::get('/',[PagesController::class,'index'])->name('index');
Route::get('/news',[PagesController::class,'news'])->name('news');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/projects',[PagesController::class,'projects'])->name('projects');




