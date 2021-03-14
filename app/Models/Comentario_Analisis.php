<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Analisis extends Model
{
	
    //relates to the comment_analysis table
	protected $table = 'comentario_analisis';

	/**
	 * relates to the user table 
	 * @return type
	 */
	public function usuario(){

		return $this->belongsTo('App\Models\User' , 'idUsu');

	}

	/**
	 * relates to the analysis table 
	 * @return type
	 */
	public function analisis(){

		return $this->hasMany('App\Models\Analisis' , 'idAna');

	}    

	use HasFactory;
}
