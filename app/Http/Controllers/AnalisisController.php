<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Analisis;
use App\Models\Comentario_Analisis;


class AnalisisController extends Controller
{
//muestra todos los analisis    
  public function index(){
    $analisis = Analisis::orderBy('created_at','desc')->simplePaginate(9);


    $categorias = Categoria::all();

    return view('analisis/index', compact('analisis', 'categorias') );

  }
//Muestra un analsis
  public function showAnalisis($id){

           //saca el nombre del autor
    $nombre = Analisis::find($id)->usuarios->name;

    $analisis = Analisis::find($id);

    $categorias = Categoria::all();
    
    $nombreCategoria = Analisis::find($id)->categorias->titulo;
    
    $com = Analisis::find($id)->comentarios;
    
    
    return view('analisis/showAnalisis', compact('analisis', 'nombre','nombreCategoria','categorias', 'com'));

  }

//buscador    
  public function buscador(Request $request){
   
    $analisis = Analisis::where("titulo", 'like', $request->texto."%")->take(10)->get();

    return view('analisis.paginas', compact('analisis') );

  }

  public static function createAnalisis(Request $request){
   
    $request->validate([
     'titulo' => 'required',
     'descripcion' => 'required',
     'imagen' => 'required',
     'idUsu' => 'required',
     'idCat' => 'required',
     'nota' => 'required',

   ]);

    $newAnalisis = new Analisis;
    $newAnalisis->titulo = $request->input('titulo');
    $newAnalisis->descripcion = $request->input('descripcion');
    $newAnalisis->imagen = $request->input('imagen');
    $newAnalisis->nota = $request->input('nota');
    $newAnalisis->idUsu = $request->input('idUsu');
    $newAnalisis->idCat = $request->input('idCat');

    $newAnalisis->save();

    

    return redirect('/analisisIndex');

  }

  public static function destroyAnalisis($id){
    $analisis = analisis::find($id);
    $analisis->delete();

    return redirect('/analisisIndex');

  }

  public static function updateAnalisis(Request $request){
    $request->validate([
     
     'titulo' => 'required',
     'descripcion' => 'required',
     'imagen' => 'required',
     'idCat' => 'required',
     'nota' => 'required',
     
   ]);

    $updateAnalisis = Analisis::find($request->input('idAna'));
    $id = $request->input('idAna');
    $updateAnalisis->titulo = $request->input('titulo');
    $updateAnalisis->descripcion = $request->input('descripcion');
    $updateAnalisis->imagen = $request->input('imagen');
    $updateAnalisis->idCat = $request->input('idCat');
    $updateAnalisis->nota = $request->input('nota');
    
    
    $updateAnalisis->save();
    

    return redirect()->route('analisis.show', ['id' => $id]);

  }

  public static function createComAnalisis(Request $request){
   
    $request->validate([

     'idUsu' => 'required',
     'idAna' => 'required',
     'comentario' => 'required'

     
   ]);

    $newComAnalisis = new Comentario_Analisis;
    $newComAnalisis->comentario = $request->input('comentario');
    $newComAnalisis->idUsu = $request->input('idUsu');
    $newComAnalisis->idAna = $request->input('idAna');

    $newComAnalisis->save();

    $id = $request->input('idAna');

    
    return redirect()->route('analisis.show', ['id' => $id]);

  }


  public static function destroyComAnalisis($id, $idAna){
    $comentarioAnalisis = Comentario_Analisis::find($id);
    $comentarioAnalisis->delete();

    $idAnalisis = $idAna;

    
    return redirect()->route('analisis.show', ['id' => $idAnalisis]);

  }

  public static function updateComAnalisis(Request $request){
    $request->validate([
     
     'comentario' => 'required',
     'idAna' => 'required',
     'idUsu' => 'required',
     
   ]);

    $updateComentarioAnalisis = Comentario_Analisis::find($request->input('id'));
    $updateComentarioAnalisis->comentario = $request->input('comentario');
    $updateComentarioAnalisis->idUsu = $request->input('idUsu');
    $updateComentarioAnalisis->idAna = $request->input('idAna');
    
    
    $updateComentarioAnalisis->save();

    $idAnalisis =  $request->input('idAna');
    

    return redirect()->route('analisis.show', ['id' => $idAnalisis]);

  }

}
