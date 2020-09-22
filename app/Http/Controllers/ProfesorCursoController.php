<?php

namespace App\Http\Controllers;

use App\ProfesorCurso;
use App\AlumnoCurso;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfesorCursoController extends Controller
{
    public function cursos()
    {
        $cursos = ProfesorCurso::join('curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->select('curso.nombre', 'curso.ID', 'curso.salon_grado', 'curso.salon_nivel')
        ->where('DNI', '=', Auth::user()->DNI)->get();
        return view('profesor.curso', compact('cursos'));
    }

    public function createIngresar()
    {
        
        $nombreCursos = ProfesorCurso::join('curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->select('curso.nombre', 'curso.ID', 'curso.salon_grado', 'curso.salon_nivel')
        ->where('DNI', '=', Auth::user()->DNI)->get();            
        
        return view('profesor.ingresarCurso', compact('nombreCursos'));
    }

    public function createIngresar1(Request $request)
    {
        $nombreAlumnos = AlumnoCurso::join('persona', 'alumno-curso.DNI_ALUMNO', '=', 'persona.DNI')
        ->select('persona.nombres','persona.DNI','persona.apellidoPaterno','persona.apellidoMaterno')
        ->where([
            ['ID_CURSO', '=', $request->curso],
            ['nota', '=', -1]] )->get();
        $idCurso = $request->curso;
        return view('profesor.ingresarAlumnoNota', compact('nombreAlumnos','idCurso'));
    }

    public function ingresarNotas(Request $request)
    {

        AlumnoCurso::where([
            ['DNI_ALUMNO', '=', $request->alumno],
            ['ID_CURSO', '=', $request->curso]
        ])->update(['nota' => $request->nota]);

        return redirect()->route('user.info');
    }

    public function reporteAlumnos()
    {
        $cursos = ProfesorCurso::join('curso', 'profesor-curso.ID', '=', 'curso.ID')
        ->select('curso.nombre', 'curso.ID', 'curso.salon_grado', 'curso.salon_nivel')
        ->where('DNI', '=', Auth::user()->DNI)->get();
        return view('profesor.reporteCurso', compact('cursos'));
    }

    public function reporteCompleto($id)
    {
        $alumnos = AlumnoCurso::join('persona', 'alumno-curso.DNI_ALUMNO', '=', 'persona.DNI')
        ->select('persona.nombres','persona.DNI','persona.apellidoPaterno','persona.apellidoMaterno')
        ->where('ID_CURSO', '=', $id )->get();

        return view('profesor.reporteCompleto', compact('alumnos'));
    }
}
