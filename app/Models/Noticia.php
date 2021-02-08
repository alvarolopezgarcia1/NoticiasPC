<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Noticia extends Model
{
    //relaciona con la tabla noticias
    protected $table = 'noticias';
    //relaciona con la id personalizada
    protected $primaryKey = 'idNot';
    
    
    //relaciona con la tabla usuario
    public function usuarios(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

        public function categorias(){

        return $this->belongsTo('App\Models\Categoria' , 'idCat');

    }

    use HasFactory;


}
