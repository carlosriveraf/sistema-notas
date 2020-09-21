<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::where([
            ['DNI', '=', Auth::user()->DNI]
        ])->get();
        return view('estudiante.asistencia', compact('asistencias'));
    }
}
