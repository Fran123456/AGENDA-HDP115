<?php

namespace App\Http\Controllers\Notification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notificacion_user;
use App\Notificacion;
use App\API\Code;
use App\User;
use App\Grupo;
use App\Grupo_User;
use App\Tarea;
use App\Tarea_User;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index() //NOTIFICACIONES PARA UN USUARIO EN ESPECIFICO EN UN GRUPO
    {
      $data = Notificacion::get_My_Notifications(Auth::user()->id, Auth::user()->grupo_activo);
    //  print_r($data);
      return view('Notifications.myNotifications', compact('data'));
    }

    //NOTIFICACIONES ENVIADAS
    public function sended(){
    $data = Notificacion::get_My_Notifications_Sended(Auth::user()->id, Auth::user()->grupo_activo);
     return view('Notifications.myNotificationsSended', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = Notificacion::get_Notification($id);
        Notificacion_User::change_status($id, Auth::user()->id);
        return view('Notifications.Notification', compact('info'));
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
        Notificacion_User::delete_notification_User(Auth::user()->id, $id);
        return back()->with('eliminado', "Tarea eliminada correctamente");
    }

    public function delete_noty($id){
      Notificacion_User::delete_notification_User(Auth::user()->id, $id);
      return back()->with('eliminado', "Tarea eliminada correctamente");
    }

    //ELIMINA LA PROPIA NOTIFICACION QUE HE ENVIADO
    public function delete_ownerNoty($id){
        Notificacion::where('codigo_noty', $id)->where('grupo' ,Auth::user()->grupo_activo)->delete();
       return back()->with('eliminado', "Tarea eliminada correctamente");
    }


}
