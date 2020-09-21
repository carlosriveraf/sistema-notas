<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Factoria\VistaFactoria;
use App\Http\Controllers\Factoria\AdministradorVista;
use App\Http\Controllers\Factoria\AlumnoVista;
use App\Http\Controllers\Factoria\ProfesorVista;

use Illuminate\Http\Request;
use App\PersonaRol;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rol = PersonaRol::where('ID_DNI', Auth::user()->DNI)->first();
        $rol = $rol->ID_ROL;
        $usuario = Auth::user();

        $factoria = new VistaFactoria();

        $vista = $factoria->getVista($rol);

        echo $vista->retornarVista($usuario);


    }
}
