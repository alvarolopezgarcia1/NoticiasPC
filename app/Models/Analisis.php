<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
 

    protected $table = 'analisis';

    protected $primaryKey = 'idAna';


    /**
     * relate to custom id
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
     * @return void
     */
    public function comentarios(){

        return $this->hasMany('App\Models\Comentario_Analisis', 'idAna');

    }

    
    use HasFactory;
}
