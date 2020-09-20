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

        /*
        SELECT curso.ID, curso.nombre, curso.salon_grado, curso.salon_seccion, CONCAT(persona.apellidoPaterno, ' ', persona.apellidoMaterno, ', ', persona.nombres) AS docente
        FROM `curso`, `alumno-curso`, `persona`, `profesor-curso` 
        WHERE (`alumno-curso`.DNI_ALUMNO = '87654321' AND `alumno-curso`.ID_CURSO = `curso`.ID AND 
        `persona`.DNI = `profesor-curso`.DNI AND `profesor-curso`.ID = `curso`.ID);
        */

        $cursos = AlumnoCurso::join('curso', 'alumno-curso.ID_CURSO', '=', 'curso.ID')
        ->join('profesor-curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->join('persona', 'persona.DNI', '=', 'profesor-curso.DNI')
        ->select('curso.ID', 'curso.nombre', 'curso.salon_grado', 'curso.salon_seccion', 
        DB::raw("CONCAT(persona.apellidoPaterno, ' ', persona.apellidoMaterno, ', ', persona.nombres) AS docente"))
        ->where('alumno-curso.DNI_ALUMNO', '=', Auth::user()->DNI)->get();

        return view('estudiante.curso', compact('cursos'));
        /*$cursos = AlumnoCurso::where([
            ['DNI_ALUMNO', '=', Auth::user()->DNI]
        ])->get();
        return view('estudiante.curso', compact('cursos'));*/
    }

    public function notas()
    {
        /*
        SELECT curso.ID, curso.nombre, `alumno-curso`.nota 
        FROM `curso`, `alumno-curso`
        WHERE (`alumno-curso`.DNI_ALUMNO = '11111111' AND `alumno-curso`.ID_CURSO = `curso`.ID);
        */

        $notas = AlumnoCurso::join('curso', 'alumno-curso.ID_CURSO', '=', 'curso.ID')
        ->select('curso.ID', 'curso.nombre', 'alumno-curso.nota')
        ->where('DNI_ALUMNO', '=', Auth::user()->DNI)->get();
        return view('estudiante.notas', compact('notas'));
    }
}
