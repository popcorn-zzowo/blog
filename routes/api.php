<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\MotocyclesController;
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
Route::post('register',[AuthController::class,'register']);

Route::post('login',[AuthController::class,'login']);

Route::group(['middleware' => 'auth:sanctum'], function() {

    Route::get('brands',[BrandsController::class, 'api_brands']);

    Route::patch('brands',[BrandsController::class, 'api_update']);

    Route::delete('brands',[BrandsController::class, 'api_delete']);

    Route::get('motocycles',[MotocyclesController::class, 'api_motocycles']);

    Route::patch('motocycles',[MotocyclesController::class, 'api_update']);

    Route::delete('motocycles',[MotocyclesController::class, 'api_delete']);
});
