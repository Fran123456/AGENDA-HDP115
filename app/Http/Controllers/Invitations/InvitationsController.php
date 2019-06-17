<?php

namespace App\Http\Controllers\Invitations;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Invitacion;
use App\Grupo;
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
        return back()->with('send', "Tarea eliminada correctamente");
    }

    public function index()
    {
        //
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
