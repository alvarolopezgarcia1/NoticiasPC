<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //relates to the categories table
    protected $table = 'categorias';
    
    //relates to custom id
    protected $primaryKey = 'idCat';
    
    use HasFactory;
}
