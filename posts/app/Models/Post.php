<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['titulo', 'extracto', 'contenido'];
    protected $guarded = []; //Asignar columna para controlar la asignacion masiva
}
