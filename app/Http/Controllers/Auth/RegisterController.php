<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use App\Grupo_User;
use App\Grupo;
use Illuminate\Http\Request;


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

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $dataAux = DB::table('grupo')->where('codigo_grupo' , $data['codigo_grupo'])->get();
      if(count($dataAux) > 0){

        $UserAux = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'grupo_activo' => $data['codigo_grupo'],
            'avatar' => 'https://i.ibb.co/P5p1trd/contacts2.png',
            'password' => bcrypt($data['password']),
        ]);

      Grupo::create([
          'user_id'  => $UserAux->id,
          'codigo_grupo' => $data['codigo_grupo'],
          'rol' => 'usuario'
       ]);

      }else{
        Grupo::create([
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

       Grupo_User::create([
          'user_id'  => $UserAux->id,
          'codigo_grupo' => $data['codigo_grupo'],
          'rol' => 'Administrador'
       ]);
      }
        return $UserAux;
    }


    public function showRegistrationFormCode($id){//EN ESTE METODO VAMOS A REGISTRAR LOS USUARIOS CON CODIGO YA EXISTENTE
    echo $id;
      //return view('auth.registerCode');
    }

    public function showValidateCode(){
      return view('auth.code');
    }

    public function validarCode(Request $request){

      $da = Grupo::where('codigo_grupo', $request['code'])->get();
      if(count($da) == 0){
        return redirect()->route('Validate-code')->with('codigo' , 'Error, el código no existe');
      }else {
        return redirect()->route('Register-code/', 1);
      }

    }


}
