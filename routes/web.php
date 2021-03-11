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
use App\Http\Controllers\CartController;
use App\Http\Controllers\CursoController;

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
//-- NEWS --
//All the news
Route::get('/noticiaIndex', [NoticiaController::class, 'index'])->middleware('auth');
//Create a news
Route::post('/createNoticia', [NoticiaController::class, 'createNoticia'])->name('noticia.create')->middleware('auth');
//Delete a news
Route::get('/destroyNoticia/{id}', [NoticiaController::class, 'destroyNoticia'])->name('noticia.delete')->middleware('auth');
//Show a news
Route::get('/noticiaShow/{id}' , [NoticiaController::class, 'showNoticia'])->name('noticia.show')->middleware('auth');
Route::post('/updateNoticia', [NoticiaController::class, 'updateNoticia'])->name('noticia.update')->middleware('auth');
//Create a comment
Route::post('/createComNoticia', [NoticiaController::class, 'createComNot'])->name('comentarioNoticia.create')->middleware('auth');
//Delete a comment 
Route::get('/destroyComNoticia/{id}/{idNot}', [NoticiaController::class, 'destroyComNoticia'])->name('comentarioNoticia.delete')->middleware('auth');
//Update a comment
Route::post('/updateComNoticia', [NoticiaController::class, 'updateComNoticia'])->name('comentarioNoticia.update')->middleware('auth');


// -- ARTICLE -- 
//all articles
Route::get('/articuloIndex', [ArticuloController::class, 'index'])->middleware('auth');
//show an article
Route::get('/articuloShow/{id}' , [ArticuloController::class, 'showArticulo'])->name('articulo.show')->middleware('auth');
//create an article
Route::post('/createArticulo', [ArticuloController::class, 'createArticulo'])->name('articulo.create')->middleware('auth');
//delete an article
Route::get('/destroyArticulo/{id}', [ArticuloController::class, 'destroyArticulo'])->name('articulo.delete')->middleware('auth');
//update an article
Route::post('/updateArticulo', [ArticuloController::class, 'updateArticulo'])->name('articulo.update')->middleware('auth');
//Create a comment
Route::post('/createComArticulo', [ArticuloController::class, 'createComArticulo'])->name('comentarioArticulo.create')->middleware('auth');
//Delete a comment 
Route::get('/destroyComArticulo/{id}/{idArt}', [ArticuloController::class, 'destroyComArticulo'])->name('comentarioArticulo.delete')->middleware('auth');
//Update a comment
Route::post('/updateComArticulo', [ArticuloController::class, 'updateComArticulo'])->name('comentarioArticulo.update')->middleware('auth');


// -- ANALISIS -- 
//All analysis
Route::get('/analisisIndex', [AnalisisController::class, 'index'])->middleware('auth');
//show an analysis
Route::get('analisisShow/{id}' , [AnalisisController::class, 'showAnalisis'])->name('analisis.show')->middleware('auth');
//create an analysis
Route::post('/createAnalisis', [AnalisisController::class, 'createAnalisis'])->name('analisis.create')->middleware('auth');
//delete an analysis
Route::get('/destroyAnalisis/{id}', [AnalisisController::class, 'destroyAnalisis'])->name('analisis.delete')->middleware('auth','admin');
//update an analysis
Route::post('/updateAnalisis', [AnalisisController::class, 'updateAnalisis'])->name('analisis.update')->middleware('auth');
//Create a comment
Route::post('/createComAnalisis', [AnalisisController::class, 'createComAnalisis'])->name('comentarioAnalisis.create')->middleware('auth');
//Delete a comment 
Route::get('/destroyComAnalisis/{id}/{idAna}', [AnalisisController::class, 'destroyComAnalisis'])->name('comentarioAnalisis.delete')->middleware('auth');
//Update a comment
Route::post('/updateComAnalisis', [AnalisisController::class, 'updateComAnalisis'])->name('comentarioAnalisis.update')->middleware('auth');


// -- Homepage --
Route::get('/', [NoticiaController::class, 'index'])->middleware('auth');

// -- SEEKER --
Route::get('/noticiaIndex/buscador' , [NoticiaController::class, 'buscador'])->middleware('auth');
Route::get('/analisisIndex/buscador' , [AnalisisController::class, 'buscador'])->middleware('auth');
Route::get('/articuloIndex/buscador' , [ArticuloController::class, 'buscador'])->middleware('auth');
Route::get('/usuarioIndex/buscador' , [UsuarioController::class, 'buscador'])->middleware('auth');


// -- USERS --
//Show users
Route::get('/usuariosIndex' , [UsuarioController::class, 'index'])->middleware('auth');
//Delete user
Route::get('/destroyUsuario/{id}', [UsuarioController::class, 'destroyUsuario'])->name('usuario.delete')->middleware('admin');
//Show a user
Route::get('usuarioShow/{id}' , [UsuarioController::class, 'showUsuario'])->name('usuario.show')->middleware('auth');
//Update a user
Route::post('/updateUsuario', [UsuarioController::class, 'updateUsuario'])->name('usuario.update')->middleware('auth');

// -- Shopping cart --
Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::get('/cart-checkout',[CartController::class, 'cart'])->name('cart.checkout')->middleware('auth');
Route::post('/cart-clear',  [CartController::class, 'clear'])->name('cart.clear')->middleware('auth');
Route::post('/cart-removeitem',  [CartController::class, 'removeitem'])->name('cart.removeitem')->middleware('auth');

/*Courses*/
Route::get('/showCursos', [CursoController::class, 'showCurso'] )->middleware('auth');
Route::get('/cursoDetalles/{id}', [CursoController::class, 'showDetalles'] )->middleware('auth');
Route::get('/cursoCarrito/{id}', [CursoController::class, 'addCarrito'] )->middleware('auth');
Route::get('/compraRealizada', [CursoController::class, 'compraRealizada'] )->middleware('auth');




