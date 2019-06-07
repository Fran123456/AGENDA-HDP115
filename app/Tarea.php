<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
   protected $table = 'tareas';
   protected $fillable = [
    'id_tarea','codigo_tarea','titulo' ,'cuerpo','estado','fecha_fin','creador','grupo','created_at','updated_at'
   ];

   public static function create_task($code, $request, $owner, $group ){
     $task = Tarea::create([
        'codigo_tarea' => $code,
        'titulo'=>$request['titulo'],
        'cuerpo'=>$request['descripcion'],
        'estado'=>$request['estado'],
        'fecha_fin'=>$request['fecha'],
        'creador' => $owner,
        'grupo' => $group,
     ]);
     return $task;
   }

   public static function AllTask_ByGroup($group){
     $tasks = Tarea::where('grupo', $group)->orderBy('id_tarea', 'DESC')->paginate(12);
     return $tasks;
   }

}
