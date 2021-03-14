<?php

/**
* @author Álvaro López
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Articulo;
use App\Models\Noticia;
use App\Models\Analisis;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function wellcome(){

        $noticias = Noticia::orderBy('created_at','desc')->take(3)->get();
        $articulos = Articulo::orderBy('created_at','desc')->take(3)->get();
        $analisis = Analisis::orderBy('created_at','desc')->take(3)->get();

        return view('wellcome', compact('noticias', 'articulos', 'analisis') );

    }
}
