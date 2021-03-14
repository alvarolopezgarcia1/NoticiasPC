<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
    //relates to the news table
    protected $table = 'noticias';
    
    //relates to custom id
    protected $primaryKey = 'idNot';
    
    /**
     * relates to the user table 
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

        return $this->hasMany('App\Models\Comentario_Noticia', 'idNot');

    }

    use HasFactory;


}
