<?php

namespace App\Http\Controllers\group;

use Illuminate\Support\Facades\Auth;
use App\Grupo;
use App\Grupo_User;
use App\User;
use App\API\code;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
