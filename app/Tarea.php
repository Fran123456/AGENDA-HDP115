<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tarea_User;
use Illuminate\Support\Facades\DB;
class Tarea extends Model
{
   protected $table = 'tareas';
   protected $fillable = [
    'id_tarea','codigo_tarea','titulo' ,'cuerpo','estado','fecha_fin','creador','grupo','created_at','updated_at'
   ];

 //CREAR TAREA
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
   }//CREAR TAREA

   //TRAE TODAS LAS TAREAS DE UN GRUPO
   public static function AllTask_ByGroup($group){
     $tasks = Tarea::where('grupo', $group)->orderBy('id_tarea', 'DESC')->paginate(12);
     return $tasks;
   }
   //TRAE TODAS LAS TAREAS DE UN GRUPO

  //TRAE LAS TAREAS QUE LE PERTENECEN A UN USUARIO EN UN GRUPO CON O SIN ESTADO
   public static function MyTask_ByGroup($group, $user_id, $statusTask){
       if($statusTask =="All"){
         $tasks = DB::table('users')
                ->join('tareas_usuarios', 'users.id', '=', 'tareas_usuarios.user_id')
                ->join('tareas', 'tareas_usuarios.tarea_id', '=', 'tareas.codigo_tarea')
                ->where('tareas_usuarios.user_id', $user_id)
                ->where('tareas_usuarios.grupo_id', $group)
                ->select( 'tareas.*')
                ->paginate(9);
       }else{
         $tasks = DB::table('users')
                ->join('tareas_usuarios', 'users.id', '=', 'tareas_usuarios.user_id')
                ->join('tareas', 'tareas_usuarios.tarea_id', '=', 'tareas.codigo_tarea')
                ->where('tareas_usuarios.user_id', $user_id)
                ->where('tareas_usuarios.grupo_id', $group)
                ->where('tareas.estado', $statusTask)
                ->select( 'tareas.*')
                ->paginate(9);
       }
     return $tasks;
   }
    //TRAE LAS TAREAS QUE LE PERTENECEN A UN USUARIO EN UN GRUPO CON O SIN ESTADO



    //CAMBIA DE ESTADO UNA TAREA A FINALIZADA
   public static function StatusTask($code, $status){
     Tarea::where('codigo_tarea', $code)->update(['estado' => $status]);
   }
   //CAMBIA DE ESTADO UNA TAREA A FINALIZADA

  //OBTIENE UNA TAREA EN ESPECIFICO
   public static function get_task($code){
       $task = Tarea::where('codigo_tarea', $code)->first();
       return $task;
   }//OBTIENE UNA TAREA EN ESPECIFICO


}
