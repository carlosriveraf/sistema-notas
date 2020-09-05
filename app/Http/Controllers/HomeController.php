<?php

namespace App\Http\Controllers;

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
        $rol = PersonaRol::where('DNI', Auth::user()->DNI);

        foreach($rol as $persona){
            var_dump($persona->ID_ROL);
        }


        

        //if (Administrador::where('DNI', Auth::user()->DNI)->exists()) {
            //return view('administrador.home');
            //return view('estudiante.home');
        //} else {
            //echo "no hay vista implementada";
        //}
    }
}
