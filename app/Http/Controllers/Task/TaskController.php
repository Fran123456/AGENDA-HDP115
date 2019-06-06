<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Grupo;
use App\Grupo_User;
use App\API\Code;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()//Todas las Tareas
    {
         $group = Grupo::get_grupo_name();
        return view('Task.AllTask', compact('group'));
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
     $Tarea = Tarea::create([
        'codigo_tarea' => $codeTask,
        'titulo'=>$request['titulo'],
        'cuerpo'=>$request['descripcion'],
        'estado'=>$request['estado'],
        'fecha_fin'=>$request['date'],
        'creador' => Auth::user()->id,
        'grupo' => Auth::user()->grupo_activo,
     ]);
     //CREACION DE LA TAREA

     //CREACION DE TAREA X USUARIO
     $users = $request->users;
     for ($i=0; $i <count($users) ; $i++) {
          $tareasUsuario = Tarea_User::create([
           'tarea_id' => $codeTask,
           'user_id' => $users[$i],
          ]);
     }


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
