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
require __DIR__.'/web/about.php';
require __DIR__.'/web/home.php';
require __DIR__.'/web/news.php';
require __DIR__.'/web/panel.php';
require __DIR__.'/web/project.php';
require __DIR__.'/web/storage.php';
require __DIR__.'/web/user.php';
require __DIR__.'/web/image.php';






