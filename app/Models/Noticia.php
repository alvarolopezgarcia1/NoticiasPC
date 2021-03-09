<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
    //relates to the news table
    protected $table = 'noticias';
    
    //relates to custom id
    protected $primaryKey = 'idNot';
    
    
    //relates to the user table
    public function usuarios(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

    //relates to the categories table
    public function categorias(){

        return $this->belongsTo('App\Models\Categoria' , 'idCat');

    }

    //relates to the comments table
    public function comentarios(){

        return $this->hasMany('App\Models\Comentario_Noticia', 'idNot');

    }

    use HasFactory;


}
