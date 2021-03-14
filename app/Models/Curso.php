<?php

/**
* @author Álvaro López
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';
    
    protected $primaryKey = 'id';
    
    use HasFactory;
}
