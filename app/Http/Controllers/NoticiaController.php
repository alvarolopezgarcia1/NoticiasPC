<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Noticia;
use App\Models\Comentario_Noticia;



class NoticiaController extends Controller
{
    //

    //Muestra todas las noticias
    public function index(){
     
        $noticias = Noticia::orderBy('created_at','desc')->simplePaginate(6);

        $categorias = Categoria::all();
        
        return view('noticias/index', compact('noticias','categorias') );

    }


    //Muestra una noticia
    public function showNoticia($id){

        //saca el nombre del autor
        $nombre = Noticia::find($id)->usuarios->name;

        //saca la noticia que se pincha
        $noticia = Noticia::find($id);

        $nombreCategoria = Noticia::find($id)->categorias->titulo;
        
        $categorias = Categoria::all();

        $com = Noticia::find($id)->comentarios;

        $miarray = array();


        foreach($com as $comm){

        $a = $comm->id;

        $com2 = Comentario_Noticia::find($a)->usuario;

        $nom = $com2->name;

        $miarray[] = $nom;

        

        }

        //var_dump($miarray);


        return view('noticias/showNoticia', compact('nombre','noticia', 'categorias','nombreCategoria', 'com', 'miarray' ));

    }

    public function buscador(Request $request){
     
        $noticias = Noticia::where("titulo", 'like', $request->texto."%")->take(10)->get();

        return view('noticias.paginas', compact('noticias') );

    }

    public static function createNoticia(Request $request){
     
        $request->validate([
         'titulo' => 'required',
         'descripcion' => 'required',
         'imagen' => 'required',
         'idUsu' => 'required',
         'idCat' => 'required',
     ]);

        $newNoticia = new Noticia;
        $newNoticia->titulo = $request->input('titulo');
        $newNoticia->descripcion = $request->input('descripcion');
        $newNoticia->imagen = $request->input('imagen');
        $newNoticia->idUsu = $request->input('idUsu');
        $newNoticia->idCat = $request->input('idCat');

        $newNoticia->save();

        

        return redirect('/noticiaIndex');

    }

    public static function destroyNoticia($id){
        $noticia = Noticia::find($id);
        $noticia->delete();

        return redirect('/noticiaIndex');

    }


    public static function updateNoticia(Request $request){
        $request->validate([
         
         'titulo' => 'required',
         'descripcion' => 'required',
         'imagen' => 'required',
         'idCat' => 'required',
         
     ]);

        $updateNoticia = Noticia::find($request->input('idNot'));
        $id = $request->input('idNot');
        $updateNoticia->titulo = $request->input('titulo');
        $updateNoticia->descripcion = $request->input('descripcion');
        $updateNoticia->imagen = $request->input('imagen');
        $updateNoticia->idCat = $request->input('idCat');
        
        
        
        $updateNoticia->save();
        

        return redirect()->route('noticia.show', ['id' => $id]);

    }


    public static function createComNot(Request $request){
     
        $request->validate([

         'idUsu' => 'required',
         'idNot' => 'required',
         'comentario' => 'required'

         
     ]);

        $newComNoticia = new Comentario_Noticia;
        $newComNoticia->comentario = $request->input('comentario');
        $newComNoticia->idUsu = $request->input('idUsu');
        $newComNoticia->idNot = $request->input('idNot');

        $newComNoticia->save();

        $id = $request->input('idNot');

        
        
        return redirect()->route('noticia.show', ['id' => $id]);

    }


    public static function destroyComNoticia($id, $idNot){
        $comentarioNoticia = Comentario_Noticia::find($id);
        $comentarioNoticia->delete();

        $idNoticia = $idNot;

        
        return redirect()->route('noticia.show', ['id' => $idNoticia]);

    }

    public static function updateComNoticia(Request $request){
        $request->validate([
         
         'comentario' => 'required',
         'idNot' => 'required',
         'idUsu' => 'required',
         
     ]);

        $updateComentarioNoticia = Comentario_Noticia::find($request->input('id'));
        $updateComentarioNoticia->comentario = $request->input('comentario');
        $updateComentarioNoticia->idUsu = $request->input('idUsu');
        $updateComentarioNoticia->idNot = $request->input('idNot');
        
        
        $updateComentarioNoticia->save();

        $idNoticia =  $request->input('idNot');
        

        return redirect()->route('noticia.show', ['id' => $idNoticia]);

    }

    public function apiNoticias(Request $req){

        $noticias = Noticia::all();

        return response()->json($noticias,200);

    }

    public function apiNoticia($id){

        $noticia = Noticia::find($id);

        return response()->json($noticia,200);

    }

}