<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function showCurso(){

        $cursos = Curso::all();

        return view('curso/cursoMenu',compact('cursos'));
    }

    public function showDetalles($id){

        $curso = Curso::find($id);

        return view('curso/cursoDetalles',compact('curso'));
    }

    public function compraRealizada(){


        return view('curso/compraRealizada');
    }


}
