<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
  
  //relates to the article table 
  protected $table = 'articulos';
  
  //relates to custom id
  protected $primaryKey = 'idArt';
  

  /**
   * relates to the users table 
   * @return type
   */
  public function usuarios(){

    return $this->belongsTo('App\Models\User' , 'idUsu');

  }

  /**
   * relates to the categories table 
   * @return type
   */
  public function categorias(){

    return $this->belongsTo('App\Models\Categoria' , 'idCat');

  }
  
  /**
   * relates to the comments table 
   * @return type
   */
  public function comentarios(){

    return $this->hasMany('App\Models\Comentario_Articulo', 'idArt');

  }

  use HasFactory;

}
