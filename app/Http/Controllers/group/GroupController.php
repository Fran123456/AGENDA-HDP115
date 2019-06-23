<?php

namespace App\Http\Controllers\group;

use Illuminate\Support\Facades\Auth;
use App\Grupo;
use App\Grupo_User;
use App\Invitacion;
use App\User;
use App\API\code;
use App\Notificacion;
use App\Notificacion_User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
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

    //LISTADO DE LOS GRUPOS EN LOS QUE ESTOY AFILIADO
    public function index()
    {
        $groups = Grupo_User::get_groupsByUser(Auth::user()->id);
        return view('Group.Groups' , compact('groups'));
    }

    public function loadDefaultGroup(){
        $groups = Grupo_User::get_groupsByUser(Auth::user()->id);


    $var=Auth::User()->name;

    // numero de posicion donde se encuentra el primer espacio
    $pos=strpos($var, " ");

    //elimino el string a partir del espacio
    $var=substr($var, 0, $pos);
    $name = strtoupper($var);
    return view('Group.NetflixGroupTemplate' , compact('groups', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //CREA EL GRUPO
    public function create()
    {   $code = Code::code_group();
        return view('Group.CreateGroup', compact('code'));
    }


    //cambia a grupo default por otro
    public function defaultGroup($code){
      User::UpdateDefaultGroup($code, Auth::User()->id);
      return back()->with('change', "Tarea eliminada correctamente");
    }

    public function defaultGroupBegin($code){
      User::UpdateDefaultGroup($code, Auth::User()->id);
      return redirect()->route('home');
    }

    public function LookingGroups(Request $request){
        $data = Grupo::SearchGroups($request->looking);
        $groups = $data[0];
        $res = $data[1];
        return view('Group.Search', compact('groups', 'res'));
    }

   public function InvitationUser($id){
        $grupo = Grupo::where('codigo_grupo', $id)->first();
        $title = strtoupper(Auth::user()->name )." HA PEDIDO UNIRSE A TU GRUPO " . $grupo->nombre_grupo;
        $body = "Hola, El usuario " . Auth::user()->name . " ha pedido unirse a tu grupo " . $grupo->nombre_grupo .
        " puedes recharzar o aceptar la petición del usuario";

        Invitacion::SendInvitation(Auth::user()->id, null, $id, 'asking');

        $codigo =Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codigo, $title, $body, Auth::user()->id, $id , null, 'asking');

        $AEnviar = Grupo_User::where('codigo_grupo', $id)->where('rol', 'Administrador')->get();
        foreach ($AEnviar as $key => $value) {
          Notificacion_User::CreateNotyTask($codigo, $value->user_id, 'SIN LEER', 'global');
        }
        return redirect()->route('Groups.index')->with('se', "Elemento agregado correctamente");
    }

    //MUSTRA LAS SOLICITUDES DE INGRESO EN UN DETERMINADO GRUPO
    public function joins(){
        $response = Invitacion::get_Joins(Auth::user()->grupo_activo);
        $data = $response[0];
        $noty = $response[1];
  //     print_r($noty);



        return view('Group.joins', compact('data','noty'));
    }
    //MUSTRA LAS SOLICITUDES DE INGRESO EN UN DETERMINADO GRUPO
    //ACEPTA LA SOLICITUD DE UN USUARIO AL GRUPO
    public function AceptingJoin($id, $id2, $id3){
    //$id es el usuario y el $id2 es el codigo del grupo, $id3 es el codigo de la notificacion amodificaR
    //  Invitacion::changeStatusAcepting('aceptada', $id, $id2, 'Usuario');

        Invitacion::changeStatus('aceptadaAdmin', $id, $id2, 'Usuario', $id3, 'askingPositiva');
        $title = strtoupper(Auth::user()->name) . " HA ACEPTADO TU SOLICITUD";

        $grupo = Grupo::where('codigo_grupo', $id2)->first();
        $body = Auth::user()->name . " acepto tu solicitud a su grupo: " . $grupo->nombre_grupo;

        $codigo =Code::__code('Noty');
        $noty= Notificacion::Create_Noty($codigo, $title, $body, Auth::user()->id, $id2 , null, 'aceptacionUser');
        Notificacion_User::CreateNotyTask($codigo, $id, 'SIN LEER', 'global');


      return back()->with('sed','elemento');
    }//ACEPTA LA SOLICITUD DE UN USUARIO AL GRUPO




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $g =Grupo::Create_Group($request['code'], $request['nombre'], $request['body'], 'Administrador', Auth::user()->id);

        return redirect()->route('Send-Invitations', $g->codigo_grupo)->with('agregado', "Elemento agregado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
    }
}
