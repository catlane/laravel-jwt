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


// 前端向后台提供code即可，会得到微信用户信息，并返回jwt的token
Route::any('auth/login', [\App\Http\Controllers\AuthController::class,'login']);

Route::group([
    'middleware' => ['token.refresh', 'jwt.auth'], //jwt.auth
    //    'prefix' => ''
], function ($router) {
    Route::post('logout', [\App\Http\Controllers\AuthController::class,'logout']);
    Route::post('me', [\App\Http\Controllers\AuthController::class,'me']);
    Route::post('reset-pwd', [\App\Http\Controllers\AuthController::class,'resetPwd']);
});
Route::post('data-collect', [\App\Http\Controllers\DataCollectController::class, 'create']);
