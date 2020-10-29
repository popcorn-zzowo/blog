<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabelsController;
use App\Http\Controllers\ModelsController;
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
Route::get('labels',[LabelsController::class,'index']);

Route::get('labels/create',[LabelsController::class,'create']);

Route::get('labels/{id}',[LabelsController::class,'show'])->where('id','[0-9]+');

Route::get('labels/{id}/edit',[LabelsController::class,'edit'])->where('id','[0-9]+');







Route::get('models',[ModelsController::class,'index']);

Route::get('models/create',[ModelsController::class,'create']);

Route::get('models/{id}',[ModelsController::class,'show'])->where('id','[0-9]+');

Route::get('models/{id}/edit',[ModelsController::class,'edit'])->where('id','[0-9]+');
