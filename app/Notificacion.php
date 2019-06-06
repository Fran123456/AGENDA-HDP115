<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'grupo_user';
   protected $fillable = [
    'id_noty','codigo_noty','titulo' ,'cuerpo','creador','grupo','tarea_id','tipo' ,'created_at','updated_at'
   ];

}
