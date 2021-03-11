<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AnalisisController;



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


Route::get('/apiNoticias', [NoticiaController::class, 'apiNoticias']);
Route::get('/apiNoticia/{id}', [NoticiaController::class, 'apiNoticia']);

Route::get('/apiArticulos', [ArticuloController::class, 'apiArticulos']);
Route::get('/apiArticulo/{id}', [ArticuloController::class, 'apiArticulo']);

Route::get('/apiAnalisis', [AnalisisController::class, 'apiAnalisis']);
Route::get('/apiAnalisi/{id}', [AnalisisController::class, 'apiAnalisi']);








Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();

});
