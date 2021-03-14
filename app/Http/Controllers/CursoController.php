<?php

/**
* @author Álvaro López
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Show a course 
     * @return type
     */
    public function showCurso(){

        $cursos = Curso::all();

        return view('curso/cursoMenu',compact('cursos'));
    }

    /**
     * Show course details 
     * @param type $id 
     * @return type
     */
    public function showDetalles($id){

        $curso = Curso::find($id);

        return view('curso/cursoDetalles',compact('curso'));
    }
    
    public function compraRealizada(){


        return view('curso/compraRealizada');
    }


}
