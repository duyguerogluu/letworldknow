<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Dashboard\Http\Controllers\MemberController;
use Modules\Dashboard\Http\Controllers\ProfileController;

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

Route::post('member-save',[MemberController::class,'store']);
Route::put('member-update/{id}',[MemberController::class,'update']);
Route::delete('member-destroy',[MemberController::class,'destroy']);

Route::post('profile-save',[ProfileController::class,'store']);
Route::put('profile-update/{id}',[ProfileController::class,'update']);
Route::delete('profile-destroy',[ProfileController::class,'store']);



Route::middleware('auth:api')->get('/dashboard', function (Request $request) {
    return $request->user();
});
