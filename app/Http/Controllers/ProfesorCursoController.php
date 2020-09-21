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
}
