<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * Routingan Untuk Register API
 * @method POST
 */

Route::post('/register', RegisterController::class)->name('register');

/**
 *  Routingan Untuk Login API
 *  @method POST
 */
Route::post('/login', LoginController::class)->name('login');

/**
 *  Routingan Untuk User API
 * @method GET
 */
Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});