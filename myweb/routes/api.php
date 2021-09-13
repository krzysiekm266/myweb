<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// require __DIR__ . '/api/users.php';
//
require __DIR__ . '/api/news.php';
require __DIR__ . '/api/user.php';

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
