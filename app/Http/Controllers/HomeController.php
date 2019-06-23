<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\API\code;
use App\Grupo;
use App\Grupo_User;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupo = Grupo::where('codigo_grupo', Auth::user()->grupo_activo)->first();
        $users = Grupo_User::contacts(Auth::user()->grupo_activo);
        $n = count($users);
        return view('home', compact('grupo','n'));
    }
}
