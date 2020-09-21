<?php

namespace App\Http\Controllers;

use App\User;
use App\PersonaRol;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $rol = PersonaRol::where('ID_DNI', Auth::user()->DNI)->first();
        $rol = $rol->ID_ROL;
        $usuario = Auth::user();
        if ($rol == "RBAC-AD") {
            return view('administrador.info', compact('usuario'));
        } else if ($rol == "RBAC-ST") {            
            return view('estudiante.info', compact('usuario'));
        } else if ($rol == "RBAC-TE") {
            return view('profesor.home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.persona-registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->DNI = $request->DNI;
        $user->password = Hash::make($request->DNI);
        $user->apellidoPaterno = $request->apellidoPaterno;
        $user->apellidoMaterno = $request->apellidoMaterno;
        $user->nombres = $request->nombres;
        $user->fechaNacimiento = $request->fechaNacimiento;
        $user->sexo = $request->sexo;
        $user->telefono = $request->telefono;
        $user->celular = $request->celular;
        $user->email = $request->email;
        $user->direccion = $request->direccion;
        $user->save();

        $u_r = new PersonaRol();
        $u_r->ID_DNI = $request->DNI;
        $u_r->ID_ROL = $request->nombre_rol;
        $u_r->save();

        return back();
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
