<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Articulo extends Model
{
    use HasFactory;

       protected $table = 'comentario_articulo';


public function usuario(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

public function articulo(){

        return $this->hasMany('App\Models\Articulo' , 'idArt');

    }    

}
