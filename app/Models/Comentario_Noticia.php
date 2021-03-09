<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Noticia extends Model
{
    use HasFactory;

    //relates to the news_comment table
    protected $table = 'comentario_noticia';
    
    //relates to custom id
    protected $primaryKey = 'id';

    
    //relates to the user table
    public function usuario(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

    //relates to the new table
    public function noticia(){

        return $this->hasMany('App\Models\Noticia' , 'idNot');

    }
    use HasFactory;
}
