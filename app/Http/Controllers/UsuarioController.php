<?php

/**
* @author Álvaro López
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
//use App\Models\Categoria;
//use App\Models\Noticia;



class UsuarioController extends Controller
{
    /**
     * Show all users 
     * @return type
     */
    public function index(){
       
        $usuarios = User::orderBy('name','asc')->simplePaginate(50);

        $usuario = User::all();
        
        return view('usuarios/index', compact('usuarios','usuario') );

    }

    /**
     * seeker
     * @param Request $request 
     * @return type
     */
    public function buscador(Request $request){
       
        $usuarios = User::where("name", 'like', $request->texto."%")->take(10)->get();

        return view('usuarios.paginas', compact('usuarios') );

    }    

    /**
     * delete a user
     * @param type $id 
     * @return type
     */
    public static function destroyUsuario($id){
        $usuarios = User::find($id);
        $usuarios->delete();

        return redirect('/usuariosIndex');

    }   

    /**
    *  show a user
    * @param type $id 
    * @return type
    */    
    public function showUsuario($id){

        $usuario = User::find($id);

        return view('usuarios/showUsuario', compact('usuario'));

    }

    /**
     * update a user
     * @param Request $request 
     * @return type
     */
    public static function updateUsuario(Request $request){
        
        $request->validate([
           
           'name' => 'required',
           'email' => 'required',
           'rol' => 'required',        
       ]);

        $updateUsuario = User::find($request->input('idUsu'));
        $id = $request->input('idUsu');
        $updateUsuario->name = $request->input('name');
        $updateUsuario->email = $request->input('email');
        $updateUsuario->rol = $request->input('rol');         
        
        $updateUsuario->save();
        
        return redirect()->route('usuario.show', ['id' => $id]);

    }


}   