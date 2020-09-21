<?php

namespace App\Http\Controllers;

use App\ProfesorCurso;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfesorCursoController extends Controller
{
    public function cursos()
    {
        //olis
        $cursos = ProfesorCurso::where([
            ['DNI', '=', Auth::user()->DNI]
        ])->get();
        return view('profesor.curso', compact('cursos'));
    }

    public function createIngresar()
    {
        
        $nombreCursos = ProfesorCurso::join('curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->select('curso.nombre', 'curso.ID')
        ->where('DNI', '=', Auth::user()->DNI)->get();            
        
        return view('profesor.ingresarCurso', compact('nombreCursos'));
    }

    public function createIngresar1(Request $request)
    {
        $nombreAlumno = AlumnoCurso::join('persona', 'alumno-curso.DNI_ALUMNO', '=', 'persona.DNI')
        ->select('persona.nombre')
        ->where([
            ['ID_CURSO', '=', $request->IDCurso],
            ['nota', '=', -1]] )->get();
        return view('profesor.ingresarAlumnoNota', compact('nombreAlumno'));
    }

    public function ingresarNotas(Request $request)
    {
        $aux = new ProfesorCurso();
        $aux->DNI = $request->DNI;
    }
}
