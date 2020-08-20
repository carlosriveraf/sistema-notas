<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //if (Administrador::where('DNI', Auth::user()->DNI)->exists()) {
            return view('alumno.home');
        //} else {
            //echo "no hay vista implementada";
        //}
    }
}
