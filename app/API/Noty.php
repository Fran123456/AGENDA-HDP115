<?php

namespace App\API;
use App\API\Code;
use App\User;
use App\Tarea;
use App\Tarea_User;
use  App\Notificacion;
use  App\Notificacion_User;
use Illuminate\Support\Facades\Auth;
class Noty
{

  function __construct()
  {

  }

  //GENERA NOTIFICACION A UN CAMBIO DE ESTADO EN TAREAS
  public static function SendNotyChange($codeNoty, $codeTask,  $title, $msm){
     $tarea = Tarea::get_task($codeTask);
     //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
     $noty= Notificacion::Create_Noty($codeNoty,  $title, $msm,Auth::user()->id, Auth::user()->grupo_activo,$tarea->codigo_tarea, 'cambio');
    //CREACION DE NOTIFICACION GENERICA EN EL SISTEMA
    $users = Tarea_User::where('tarea_id', $tarea->codigo_tarea)->get();
   //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
    foreach ($users as $key => $value) {
     if(Auth::user()->id != $value->user_id){
            Notificacion_User::CreateNotyTask($codeNoty, $value->user_id, 'SIN LEER');
       }
     }
  }
  //GENERA NOTIFICACION A UN CAMBIO DE ESTADO EN TAREAS

}
