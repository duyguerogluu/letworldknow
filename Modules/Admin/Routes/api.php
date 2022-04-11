<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\UserAdminController;

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
Route::prefix('admin')
            ->name('admin.')
                    ->group(function () {

    Route::get('user-delete/{id}', [UserAdminController::class, 'destroy'])->name('user.destroy');
});


Route::middleware('auth:api')->get('/admin', function (Request $request) {
    return $request->user();
});
