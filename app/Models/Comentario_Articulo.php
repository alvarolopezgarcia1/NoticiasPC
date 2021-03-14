<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario_Articulo extends Model
{
	use HasFactory;

	//relates to the article_comment table
	protected $table = 'comentario_articulo';

	/**
	 * relates to the user table 
	 * @return type
	 */
	public function usuario(){

		return $this->belongsTo('App\Models\User' , 'idUsu');

	}

	/**
	 * relates to the article table 
	 * @return type
	 */
	public function articulo(){

		return $this->hasMany('App\Models\Articulo' , 'idArt');

	}    

}
