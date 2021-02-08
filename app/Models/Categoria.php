<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
     //relaciona con la tabla
    protected $table = 'categorias';
    //relaciona con la id personalizada
    protected $primaryKey = 'idCat';
    use HasFactory;
}
