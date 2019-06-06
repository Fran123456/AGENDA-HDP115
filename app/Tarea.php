<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
   protected $table = 'tareas';
   protected $fillable = [
    'id_tarea','codigo_tarea','titulo' ,'cuerpo','estado','fecha_fin','creador','grupo','created_at','updated_at'
   ];

}
