<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Noticia extends Model
{
    use HasFactory;

    protected $table = 'comentario_noticia';
    protected $primaryKey = 'id';



    public function usuario(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

    public function noticia(){

        return $this->hasMany('App\Models\Noticia' , 'idNot');

    }
    use HasFactory;
}
