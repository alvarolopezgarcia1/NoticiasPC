<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
     //relaciona con la tabla 
  protected $table = 'articulos';
    //relaciona con la id personalizada
  protected $primaryKey = 'idArt';
  use HasFactory;

     //relaciona con la tabla usuarios  
  public function usuarios(){

    return $this->belongsTo('App\Models\User' , 'idUsu');

  }

  public function categorias(){

    return $this->belongsTo('App\Models\Categoria' , 'idCat');

  }

  public function comentarios(){

    return $this->hasMany('App\Models\Comentario_Articulo', 'idArt');

  }

}
