<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\PersonaRol;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            /* 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], */
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        User::create([
            'DNI' => $data['DNI'],
            'password' => Hash::make($data['password']),
            'apellidoPaterno' => $data['apellidoPaterno'],
            'apellidoMaterno' => $data['apellidoMaterno'],
            'nombres' => $data['nombres'],
            'fechaNacimiento' => $data['fechaNacimiento'],
            'sexo' => $data['sexo'],
            'telefono' => $data['telefono'],
            'celular' => $data['celular'],
            'email' => $data['email'],
            'direccion' => $data['direccion']       
        ]);

        $u_r = new PersonaRol();
        $u_r->ID_DNI = $data['DNI'];
        $u_r->ID_ROL = $data['nombre_rol'];
        $u_r->save();
        
        return view('administrador.home');
    }
}
