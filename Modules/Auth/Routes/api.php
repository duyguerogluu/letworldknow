<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;
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

Route::post('register',[AuthController::class,'register'])->name('register');
Route::post('login',[AuthController::class,'login'])->name('login');

Route::get('not-login',[AuthController::class,'notLogin'])->name('notlogin');

Route::middleware('auth:api')->group(function () {
    Route::post('logout',[AuthController::class,'logout']);
});

Route::middleware('auth:api')->get('/auth', function (Request $request) {
    return $request->user();
});
