<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlumnoCurso;
use Illuminate\Support\Facades\Auth;

class AlumnoCursoController extends Controller
{
    public function index()
    {
        $cursos = AlumnoCurso::where([
            ['DNI_ALUMNO', '=', Auth::user()->DNI]
        ])->get();
        return view('estudiante.curso', compact('cursos'));
    }
}
