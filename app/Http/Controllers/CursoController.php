<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    
    public function index()
    {
        $cursos = Curso::all();
        return view('estudiante.curso', compact('cursos'));
    }

    public function crear()
    {
        $salones = Salon::all;
        return view('administrador.curso');
    }


}
