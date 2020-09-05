<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoCurso;

class AlumnoCursoController extends Controller
{
    public function index()
    {
        $cursos = AlumnoCurso::where([
            ['DNI_ALUMNO', '=', '87654321']
        ])->get();
        return view('estudiante.curso', compact('cursos'));
    }
}
