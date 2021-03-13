<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
 
     /* 
     *relate to the analysis table
     * @var type
     */
    protected $table = 'analisis';

   //relate to custom id
    protected $primaryKey = 'idAna';

    
    //relates to the users table
    public function usuarios(){

        return $this->belongsTo('App\Models\User' , 'idUsu');

    }

    //relates to the categories table
    public function categorias(){

        return $this->belongsTo('App\Models\Categoria' , 'idCat');

    }

    //relates to the comments table

    /*
     * relates to the comments table
     * @return void
     */
    public function comentarios(){

        return $this->hasMany('App\Models\Comentario_Analisis', 'idAna');

    }

    
    use HasFactory;
}
