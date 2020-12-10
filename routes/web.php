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
Route::get('brands',[BrandsController::class,'index'])->name('brands.index');

Route::get('brands/create',[BrandsController::class,'create'])->name('brands.create');

Route::get('brands/{id}',[BrandsController::class,'show'])->where('id','[0-9]+')->name('brands.show');

Route::get('brands/{id}/edit',[BrandsController::class,'edit'])->where('id','[0-9]+')->name('brands.edit');

Route::post('brands/store',[BrandsController::class,'store'])->name('brands.store');

Route::patch('brands/update/{id}' ,[BrandsController::class,'update'])->name('brands.update');

Route::delete('brands/delete/{id}' ,[BrandsController::class, 'destroy'])->where('id','[0-9]+')->name('brands.destroy');





Route::get('motocycles',[MotocyclesController::class,'index'])->name('motocycles.index');

Route::get('motocycles/create',[MotocyclesController::class,'create'])->name('motocycles.create');

Route::get('motocycles/{id}',[MotocyclesController::class,'show'])->where('id','[0-9]+')->name('motocycles.show');

Route::get('motocycles/{id}/edit',[MotocyclesController::class,'edit'])->where('id','[0-9]+')->name('motocycles.edit');

Route::post('motocycles/store',[MotocyclesController::class,'store'])->name('motocycles.store');

Route::patch('motocycles/update/{id}',[MotocyclesController::class,'update'])->name('motocycles.update');

Route::delete('motocycles/delete/{id}',[MotocyclesController::class,'destroy'])->where('id','[0-9]+')->name('motocycles.destroy');

Route::get('motocycles/hypercar',[MotocyclesController::class,'hypercar'])->name('motocycles.hypercar');

Route::post('motocycles/kind',[MotocyclesController::class,'kind'])->name('motocycles.kind');
