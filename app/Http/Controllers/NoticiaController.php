<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Noticia;



class NoticiaController extends Controller
{
    //

    //Muestra todas las noticias
    public function index(){
       
        $noticias = Noticia::orderBy('created_at','desc')->simplePaginate(9);

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
        

        return view('noticias/showNoticia', compact('nombre','noticia', 'categorias','nombreCategoria'));

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



}