<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyController;
use App\Http\Controllers\BikeController;

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




//Defino una ruta a la que se llega con el método get

Route::get('/', [BikeController::class, 'index']);
Route::get('create', [BikeController::class, 'create']);
Route::post('store', [BikeController::class, 'store']);
Route::get('delete/{id}', [BikeController::class, 'destroy']);
Route::get('edit/{id}', [BikeController::class, 'edit']);
Route::post('update', [BikeController::class, 'update']);
Route::get('show/{id}/{nombre}/{precio}', [BikeController::class, 'show']);