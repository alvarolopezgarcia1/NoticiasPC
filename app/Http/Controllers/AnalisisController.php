<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Analisis;


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

  
        
       
        

        return view('analisis/showAnalisis', compact('analisis', 'nombre','nombreCategoria','categorias'));

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

}
