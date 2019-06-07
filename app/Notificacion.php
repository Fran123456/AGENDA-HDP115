<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';
   protected $fillable = [
    'id_noty','codigo_noty','titulo' ,'cuerpo','creador','grupo','tarea_id','tipo' ,'created_at','updated_at'
   ];

   public static function Create_Noty($code, $title, $body, $owner, $group,$codeTask, $type){
       $noty = Notificacion::create([
         'codigo_noty' => $code,
         'titulo' => $title,
         'cuerpo' => $body,
         'creador' => $owner,
         'grupo' => $group,
         'tarea_id' => $codeTask,
         'tipo' => $type
       ]);
       return $noty;
   }

}
