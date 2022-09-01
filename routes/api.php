<?php

use App\Http\Controllers\API\VehiculoController;
use App\Http\Controllers\API\LineaProductoController;
use App\Http\Controllers\API\DistribuidoresController;
use App\Http\Controllers\API\NewsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vehiculo', [VehiculoController::Class,'index']);
Route::get('vehiculo/{vehiculo}', [VehiculoController::Class,'show']);

Route::get('lineaproducto', [LineaProductoController::Class,'index']);
Route::get('modelo', [LineaProductoController::Class,'show']);

Route::get('distribuidores', [DistribuidoresController::Class,'index']);
Route::get('getvehiculo/{vehiculo}', [DistribuidoresController::Class,'show']);


Route::get('news', [NewsController::Class,'index']);

