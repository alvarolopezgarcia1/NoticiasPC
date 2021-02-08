<?php

use Illuminate\Support\Facades\Route;

use App\Models\Noticia;
use App\Models\Articulo;
use App\Models\Analisis;
use App\Models\User;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\AnalisisController;
use App\Http\Controllers\UsuarioController;

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


Route::get('/home', [HomeController::class, 'wellcome'])->middleware('auth');

Auth::routes();
//-- NOTICIA --
//Todas las noticias
Route::get('/noticiaIndex', [NoticiaController::class, 'index'])->middleware('auth');
Route::post('/createNoticia', [NoticiaController::class, 'createNoticia'])->name('noticia.create')->middleware('auth');
//Borrar noticia
Route::get('/destroyNoticia/{id}', [NoticiaController::class, 'destroyNoticia'])->name('noticia.delete')->middleware('auth');
//Mostrar una noticia
Route::get('/noticiaShow/{id}' , [NoticiaController::class, 'showNoticia'])->name('noticia.show')->middleware('auth');
Route::post('/updateNoticia', [NoticiaController::class, 'updateNoticia'])->name('noticia.update')->middleware('auth');


// -- ARTICULO -- 
//Todos los articulos
Route::get('/articuloIndex', [ArticuloController::class, 'index'])->middleware('auth');
//Mostrar un articulo
Route::get('/articuloShow/{id}' , [ArticuloController::class, 'showArticulo'])->name('articulo.show')->middleware('auth');
//Crear articulo
Route::post('/createArticulo', [ArticuloController::class, 'createArticulo'])->name('articulo.create')->middleware('auth');
//Borrar articulo
Route::get('/destroyArticulo/{id}', [ArticuloController::class, 'destroyArticulo'])->name('articulo.delete')->middleware('auth');
//actualizar
Route::post('/updateArticulo', [ArticuloController::class, 'updateArticulo'])->name('articulo.update')->middleware('auth');


// -- ANALISIS -- 
//Todos los analisis
Route::get('/analisisIndex', [AnalisisController::class, 'index'])->middleware('auth');
//Mostrar un analisis
Route::get('analisisShow/{id}' , [AnalisisController::class, 'showAnalisis'])->name('analisis.show')->middleware('auth');
//Crear analisis
Route::post('/createAnalisis', [AnalisisController::class, 'createAnalisis'])->name('analisis.create')->middleware('auth');
//Borrar analisis
Route::get('/destroyAnalisis/{id}', [AnalisisController::class, 'destroyAnalisis'])->name('analisis.delete')->middleware('auth','admin');
Route::post('/updateAnalisis', [AnalisisController::class, 'updateAnalisis'])->name('analisis.update')->middleware('auth');


// -- PAGINA PRINCIPAL --
Route::get('/', [HomeController::class, 'wellcome'])->middleware('auth');

// -- BUSCADOR--
Route::get('/noticiaIndex/buscador' , [NoticiaController::class, 'buscador'])->middleware('auth');
Route::get('/analisisIndex/buscador' , [AnalisisController::class, 'buscador'])->middleware('auth');
Route::get('/articuloIndex/buscador' , [ArticuloController::class, 'buscador'])->middleware('auth');
Route::get('/usuarioIndex/buscador' , [UsuarioController::class, 'buscador'])->middleware('auth');


// -- USUARIOS --
Route::get('/usuariosIndex' , [UsuarioController::class, 'index'])->middleware('admin');
Route::get('/destroyUsuario/{id}', [UsuarioController::class, 'destroyUsuario'])->name('usuario.delete')->middleware('admin');

Route::get('usuarioShow/{id}' , [UsuarioController::class, 'showUsuario'])->name('usuario.show')->middleware('auth');
//actualizar
Route::post('/updateUsuario', [UsuarioController::class, 'updateUsuario'])->name('usuario.update')->middleware('auth');


