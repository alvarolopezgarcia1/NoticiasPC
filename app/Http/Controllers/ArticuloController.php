<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Categoria;
use App\Models\Articulo;
use App\Models\Comentario_Articulo;



class ArticuloController extends Controller
{
  public function index(){
    $articulo = Articulo::orderBy('created_at','desc')->simplePaginate(9);


    $categorias = Categoria::all();

    return view('articulos/index', compact('articulo', 'categorias') );

  }

 //Muestra un articulo
  public function showArticulo($id){

    $articulo = Articulo::find($id);

           //saca el nombre del autor
    $nombre = Articulo::find($id)->usuarios->name;

    $nombreCategoria = Articulo::find($id)->categorias->titulo;
    
    $categorias = Categoria::all();


    $com = Articulo::find($id)->comentarios;


    return view('articulos/showArticulo', compact('articulo', 'nombre', 'nombreCategoria', 'categorias', 'com'));

  }
    //buscador    
  public function buscador(Request $request){
   
    $articulo = Articulo::where("titulo", 'like', $request->texto."%")->take(10)->get();

    return view('articulos.paginas', compact('articulo') );

  }

  public static function createArticulo(Request $request){
   
    $request->validate([
     'titulo' => 'required',
     'descripcion' => 'required',
     'imagen' => 'required',
     'idUsu' => 'required',
     'idCat' => 'required',
   ]);

    $newArticulo = new Articulo;
    $newArticulo->titulo = $request->input('titulo');
    $newArticulo->descripcion = $request->input('descripcion');
    $newArticulo->imagen = $request->input('imagen');
    $newArticulo->idUsu = $request->input('idUsu');
    $newArticulo->idCat = $request->input('idCat');

    $newArticulo->save();

    

    return redirect('/articuloIndex');

  }


  public static function destroyArticulo($id){
    $articulo = articulo::find($id);
    $articulo->delete();

    return redirect('/articuloIndex');

  }

  public static function updateArticulo(Request $request){
    $request->validate([
     
     'titulo' => 'required',
     'descripcion' => 'required',
     'imagen' => 'required',
     'idCat' => 'required',
     
   ]);

    $updateArticulo = Articulo::find($request->input('idArt'));
    $id = $request->input('idArt');
    $updateArticulo->titulo = $request->input('titulo');
    $updateArticulo->descripcion = $request->input('descripcion');
    $updateArticulo->imagen = $request->input('imagen');
    $updateArticulo->idCat = $request->input('idCat');
    
    
    
    $updateArticulo->save();
    

    return redirect()->route('articulo.show', ['id' => $id]);

  }

  public static function createComArticulo(Request $request){
   
    $request->validate([

     'idUsu' => 'required',
     'idArt' => 'required',
     'comentario' => 'required'

     
   ]);

    $newComArticulo = new Comentario_Articulo;
    $newComArticulo->comentario = $request->input('comentario');
    $newComArticulo->idUsu = $request->input('idUsu');
    $newComArticulo->idArt = $request->input('idArt');

    $newComArticulo->save();

    $id = $request->input('idArt');

    
    
    return redirect()->route('articulo.show', ['id' => $id]);

  }


  public static function destroyComArticulo($id, $idArt){
    $comentarioArticulo = Comentario_Articulo::find($id);
    $comentarioArticulo->delete();

    $idArticulo = $idArt;

    
    return redirect()->route('articulo.show', ['id' => $idArticulo]);

  }

  public static function updateComArticulo(Request $request){
    $request->validate([
     
     'comentario' => 'required',
     'idArt' => 'required',
     'idUsu' => 'required',
     
   ]);

    $updateComentarioArticulo = Comentario_Articulo::find($request->input('id'));
    $updateComentarioArticulo->comentario = $request->input('comentario');
    $updateComentarioArticulo->idUsu = $request->input('idUsu');
    $updateComentarioArticulo->idArt = $request->input('idArt');
    
    
    $updateComentarioArticulo->save();

    $idArticulo =  $request->input('idArt');
    

    return redirect()->route('articulo.show', ['id' => $idArticulo]);

  }



}
