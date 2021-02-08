<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
     //relaciona con la tabla
    protected $table = 'analisis';
    //relaciona con la id personalizada
    protected $primaryKey = 'idAna';

    //relaciona con la tabla usuarios  
    public function usuarios(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

    
      public function categorias(){

        return $this->belongsTo('App\Models\Categoria' , 'idCat');

    }

    
    use HasFactory;
}
