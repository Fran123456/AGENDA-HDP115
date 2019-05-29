<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**https://i.ibb.co/P5p1trd/contacts2.png
https://i.ibb.co/P5p1trd/contacts2.png
https://i.ibb.co/P5p1trd/contacts2.png
https://i.ibb.co/P5p1trd/contacts2.png
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        DB::table('grupo')->insert([
            'codigo_grupo' => $data['codigo_grupo'],
            'nombre_grupo' => $data['nombre_grupo'],
            'descripcion' => $data['des']
          ]);


        $UserAux = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'grupo_activo' => $data['codigo_grupo'],
            'avatar' => 'https://i.ibb.co/P5p1trd/contacts2.png',
            'password' => bcrypt($data['password']),
        ]);

       DB::table('grupo_user')->insert([
          'user_id'  => $UserAux->id,
          'codigo_grupo' => $data['codigo_grupo'],
          'rol' => 'Administrador'
       ]);

        return $UserAux;


    }
}
