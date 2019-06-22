<?php

namespace App\Http\Controllers\Invitations;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invitacion;
use App\Notificacion;
use App\Notificacion_User;
use App\Grupo;
use App\API\Code;
use Illuminate\Support\Facades\Auth;

class InvitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function SendInvitacions($id){
        $grupo = Grupo::where('codigo_grupo' ,$id)->first();
        return view('Invitations.Sendinvitacions', compact('grupo','id'));
    }

    //BUSCAR UN USUARIO PARA ENVIARLE LA INVITACION
    public function LookForUser($id, Request $request){
    $response = User::get_UserByEmailOrName($request->mail, $id);
    $users = $response[0];
    $res = $response[1];
    $grupo = Grupo::where('codigo_grupo' ,$id)->first();
    //$users = $users->toArray();
    return view('Invitations.looking', compact('users','id','grupo','res'));
    }//BUSCAR UN USUARIO PARA ENVIARLE LA INVITACION

    public function sendInvitation($id,$code){

       Invitacion::SendInvitation($id, Auth::User()->id, $code, 'pendiente');
       $title = 'Se te ha enviado una invitación nueva';
       $body=  Auth::user()->name ." te ha enviado una invitación para que te unas a su grupo.";

        $codigo =Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codigo, $title, $body, Auth::user()->id, $code , null, 'invitacion');
        Notificacion_User::CreateNotyTask($codigo, $id, 'SIN LEER', 'global');

        return back()->with('send', "Tarea eliminada correctamente");
    }

    public function index()
    {   $response= Invitacion::invitations(Auth::User()->id);

        $invitations = $response[0];
        $noty = $response[1];
        
        return view('Invitations.invitations', compact('invitations' ,'noty'));
    }

    public function accepted($id, $id2, $id3){
      //id = codigo del gurpo , id2 = administrador que envioo la solicitud, id3 es el codigo de la nbotificacion
       Invitacion::changeStatus('aceptada', Auth::User()->id, $id, 'Usuario', $id3,'invitacionPositiva');
       $grupo = Grupo::where('codigo_grupo' , $id)->first();

       $codigo =Code::__code('Noty');
       $title = strtoupper(Auth::user()->name). " HA ACEPTADO UNA INVITACIÓN TUYA";
       $body = Auth::user()->name . " Ha aceptado la invitación a tu grupo: " .$grupo->nombre_grupo . " , ahora ya pertenece a tu grupo dale la bienvenida";
       $noty= Notificacion::Create_Noty($codigo, $title, $body, Auth::user()->id, $id , null, 'aceptacion');

       Notificacion_User::CreateNotyTask($codigo, $id2, 'SIN LEER', 'global');
       return back()->with('aceptada', "Tarea eliminada correctamente");
    }

    public function denegate($id){
       Invitacion::changeStatus('rechazada', Auth::User()->id, $id, 'Usuario');
      //Invitacion::changeStatus($id,'aceptada');
      return back()->with('aceptada', "Tarea eliminada correctamente");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creamos la invitacion


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
