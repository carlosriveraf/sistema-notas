<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Factoria\VistaFactoria;
use App\Http\Controllers\Factoria\AdministradorVista;
use App\Http\Controllers\Factoria\AlumnoVista;
use App\Http\Controllers\Factoria\ProfesorVista;

use App\User;
use App\PersonaRol;
use App\Curso;
use App\AlumnoCurso;
use App\ProfesorCurso;
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

        $factoria = new VistaFactoria();

        $vista = $factoria->getVista($rol);

        echo $vista->retornarVista($usuario);

        /* if ($rol == "RBAC-AD") {
            return view('administrador.info', compact('usuario'));
        } else if ($rol == "RBAC-ST") {            
            return view('estudiante.info', compact('usuario'));
        } else if ($rol == "RBAC-TE") {
            return view('profesor.info', compact('usuario'));
        } */
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

            if($request->nombre_rol == 'RBAC-ST'){
                return view('administrador.matricula', compact('request'));
            } 
            else if ($request->nombre_rol == 'RBAC-TE') {
                $cursos = Curso::all(); 
                return view('administrador.profesor-curso',compact ('request','cursos'));
            }

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
    
    public function matricula(Request $request){
        $cursos = Curso::where([
            ['salon_nivel', '=', $request->salon_nivel],
            ['salon_grado', '=', $request->salon_grado]
        ])->get();
        foreach ($cursos as $curso) {
            $aux = new AlumnoCurso();
            $aux->nota = -1;
            $aux->DNI_ALUMNO = $request->DNI;
            $aux->ID_CURSO = $curso->ID;
            $aux->save();
        }
        return redirect()->route('user.info');
    }

    public function asignarCurso(Request $request){
        foreach ($request->ID as $key) {
            
            $aux = new ProfesorCurso();
            $aux->DNI = $request->DNI;
            $aux->ID = $key;
            $aux->save();
        }
        return redirect()->route('user.info');
    }

}
