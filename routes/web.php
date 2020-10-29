<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\MotocyclesController;
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
Route::get('brands',[BrandsController::class,'index']);

Route::get('brands/create',[BrandsController::class,'create']);

Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+');

Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+');







Route::get('motocycles',[MotocyclesController::class,'index']);

Route::get('motocycles/create',[MotocyclesController::class,'create']);

Route::get('motocycles/{id}',[MotocyclesController::class,'show'])->where('id','[0-9]+');

Route::get('motocycles/{id}/edit',[MotocyclesController::class,'edit'])->where('id','[0-9]+');
