<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Analisis extends Model
{
    use HasFactory;

    protected $table = 'comentario_analisis';

public function usuario(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

public function analisis(){

        return $this->hasMany('App\Models\Analisis' , 'idAna');

    }    
}
