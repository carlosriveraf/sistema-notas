<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoCurso;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AlumnoCursoController extends Controller
{
    public function cursos()
    {

        $cursos = AlumnoCurso::join('curso', 'alumno-curso.ID_CURSO', '=', 'curso.ID')
        ->join('profesor-curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->join('persona', 'persona.DNI', '=', 'profesor-curso.DNI')
        ->select('curso.ID', 'curso.nombre', 'curso.salon_grado', 'curso.salon_nivel', 
        DB::raw("CONCAT(persona.apellidoPaterno, ' ', persona.apellidoMaterno, ', ', persona.nombres) AS docente"))
        ->where('alumno-curso.DNI_ALUMNO', '=', Auth::user()->DNI)->get();

        return view('estudiante.curso', compact('cursos'));
    }

    public function notas()
    {
        $notas = AlumnoCurso::join('curso', 'alumno-curso.ID_CURSO', '=', 'curso.ID')
        ->select('curso.ID', 'curso.nombre', 'alumno-curso.nota')
        ->where('DNI_ALUMNO', '=', Auth::user()->DNI)->get();
        return view('estudiante.notas', compact('notas'));
    }
}
