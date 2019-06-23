<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Grupo;
use App\Grupo_User;
use App\Tarea;
use App\Tarea_User;
use App\Notificacion;
use App\notificacion_user;
use App\API\Code;
use App\API\Noty;
use App\API\PersonalPaginate;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');

     }

    public function adminTask(){//MUESTRA EL MENU DE TODAS LAS TAREAS SI ERES ADMIN
      $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);
      return view('Task.TaskAdmin', compact('rolUserActivo'));
    }

    public function MyadminTask(){//MUESTRA EL MENU DE TUS TAREAS USUARIO COMUN
      $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);
      return view('Task.MyTaskAdmin', compact('rolUserActivo'));
    }

    public function index()//Todas las Tareas mostradas a el administrador
    {
        $group = Grupo::get_grupo_name();
        $tasks = Tarea::AllTask_ByGroup(Auth::user()->grupo_activo);
        $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);
        return view('Task.AllTask', compact('group','tasks','rolUserActivo'));
    }

    public function show_All_My_Task(){ //las tareas que pertenecen aun usuario en especifico en un grupo
      $title = 'Todas tús tareas';
      $group = Grupo::get_grupo_name();
      $tasks = Tarea::MyTask_ByGroup(Auth::user()->grupo_activo, Auth::user()->id,'All');
      $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);
      return view('Task.MyTask', compact('group','tasks','rolUserActivo','title'));
    }

    public function show_All_My_Task_status($id){ //las tareas que pertenecen aun usuario en especifico en un grupo dependiendo el estado
      if($id == "start"){
        $title = 'Todas tús tareas con estado inicio';
        $status ="Inicio";
      }elseif($id == 'Process'){
         $title = 'Todas tús tareas con estado inicio';
           $status ="Proceso";
      }elseif($id == 'finish'){
        $title = 'Todas tús tareas con estado inicio';
        $status ="finalizado";
      }elseif($id == 'No-finish'){
        $title = 'Todas tús tareas con estado inicio';
        $status ="No terminada";
      }
      else{
        $title = 'Error, no hay tareas';
        $status ="error";
      }
      $group = Grupo::get_grupo_name();
      $tasks= Tarea::MyTask_ByGroup(Auth::user()->grupo_activo, Auth::user()->id, $status);
      $rolUserActivo = Grupo_User::get_rol(Auth::user()->id, Auth::user()->grupo_activo);

    if($id == 'No-finish'){

    }else{
      return view('Task.MyTask', compact('group','title','tasks','rolUserActivo'));
    }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Grupo_User::get_users_by_group_task();
        return view('Task.createTask', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //CREACION DE LA TAREA
     $codeTask = Code::__code('Task');
     $Task = Tarea::create_task($codeTask, $request, Auth::user()->id, Auth::user()->grupo_activo );
     //CREACION DE LA TAREA

     //CREACION DE TAREA X USUARIO
     $users = $request->users;
     for ($i=0; $i <count($users) ; $i++) {
          $TaskUser = Tarea_User::Create_TaskUser($codeTask, $users[$i], Auth::user()->grupo_activo);
     }
     //CREACION DE TAREA X USUARIO

     //CREACION DE NOTIFICACION
     $code = Code::__code('Noty');
     $title = strtoupper(Auth::user()->name) . " TE ASIGNO UNA NUEVA TAREA";
     $Noty =  Notificacion::Create_Noty($code, $title, $request['mensaje'], Auth::user()->id, Auth::user()->grupo_activo ,$codeTask, 'tarea');
     //CREACION DE NOTIFICACION
     //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
         for ($i=0; $i <count($users) ; $i++) {
           if($users[$i] != Auth::user()->id){
             Notificacion_User::CreateNotyTask($code, $users[$i], 'SIN LEER', Auth::user()->grupo_activo);
        //    $to = User::where('id', $users[$i])->first();
        //   $this->mail_newTask($to->email, $tituloGenerico , $request['mensaje'], 'support@yetitask.djfrankremixer.com'  ,'yeti.png',  Auth::user()->name, Auth::user()->email, ' Soporte YETI-TASK', $to->name);
            }
        }
      //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA
     return redirect()->route('Tasks.index')->with('agregado', "Elemento agregado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //MUESTRA TODAS LAS TAREAS A EL ADMINISTRADOR
    {
       $Task = tarea::get_task($id); //obtenemos la tarea
       $UserAsigment = User::get_user($Task->creador);
       $arrayUsers = Tarea_User::get_users_by_task($Task->codigo_tarea);
       return view('Task.ShowTask', compact('Task','UserAsigment','arrayUsers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $users = Tarea_User::where('tarea_id', $id)->get();
       Notificacion::where('tarea_id', $id)->delete();
      Tarea::where('codigo_tarea', $id)->delete();

      //CREACION DE NOTIFICACION
      $code = Code::__code('Noty');
      $title = strtoupper(Auth::user()->name) . " HA ELIMINADO UNA TAREA";
      $body = "Se ha eliminado una tarea, porfavor no continuar con ella";
      $Noty =  Notificacion::Create_Noty($code, $title, $body, Auth::user()->id, Auth::user()->grupo_activo , null , 'borrar-tarea');
      //CREACION DE NOTIFICACION
      //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA

          foreach ($users as $key => $value) {
            if($value->id != Auth::user()->id){
              Notificacion_User::CreateNotyTask($code, $value->id, 'SIN LEER');
         //    $to = User::where('id', $users[$i])->first();
         //   $this->mail_newTask($to->email, $tituloGenerico , $request['mensaje'], 'support@yetitask.djfrankremixer.com'  ,'yeti.png',  Auth::user()->name, Auth::user()->email, ' Soporte YETI-TASK', $to->name);
             }
         }
       //CREACION DE NOTIFICACION POR USUARIO EN EL SISTEMA

      return back()->with('eliminado', "Tarea eliminada correctamente");
    }

  //CAMBIO DE ESTADO FINALIZADO
   public function Finish_Task($id){
      Tarea::StatusTask($id, 'Finalizado');
      $msm = Auth::user()->name . " ha cambiado el estado de la tarea ha FINALIZADO.";
      $title = "CAMBIÓ DE ESTADO LA TAREA";
      $codeNoty = Code::__code('Noty');
      Noty::SendNotyChange($codeNoty,$id,  $title, $msm);
     return back()->with('fin', "Elemento agregado correctamente");
   }//CAMBIO DE ESTADO FINALIZADO

   //CAMBIO DE ESTADO EN PROCESO
    public function Process_Task($id){
       Tarea::StatusTask($id, 'Proceso');
       $msm = Auth::user()->name . " ha cambiado el estado de la tarea ha EN PROCESO.";
       $title = "CAMBIÓ DE ESTADO LA TAREA";
       $codeNoty = Code::__code('Noty');
       Noty::SendNotyChange($codeNoty,$id,  $title, $msm);
      return back()->with('proceso', "Elemento agregado correctamente");
    } //CAMBIO DE ESTADO EN PROCESO

    //CAMBIO DE ESTADO EN INICIO
     public function Start_Task($id){
        Tarea::StatusTask($id, 'Inicio');
        $msm = Auth::user()->name . " ha cambiado el estado de la tarea ha INICIO.";
        $title = "CAMBIÓ DE ESTADO LA TAREA";
        $codeNoty = Code::__code('Noty');
        Noty::SendNotyChange($codeNoty,$id,  $title, $msm);
       return back()->with('inicio', "Elemento agregado correctamente");
     } //CAMBIO DE ESTADO EN INICIO




}
