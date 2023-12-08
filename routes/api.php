<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TrxTypeController;

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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class,'login']);
    // Route::post('signup', [AuthController::class,'signup']);
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::post('logout', [AuthController::class,'logout']);
    });
});

Route::group([
    'prefix' => 'trx-type-management',
    'middleware' => 'auth:api'
],function(){
    Route::post('create',[TrxTypeController::class,'createTrxType']);
    Route::put('update',[TrxTypeController::class,'updateTrxType']);
    Route::delete('delete',[TrxTypeController::class,'deleteTrxType']);
});