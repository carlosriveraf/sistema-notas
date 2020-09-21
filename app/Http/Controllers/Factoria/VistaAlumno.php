<?php

namespace App\Http\Controllers\Factoria;

use App\Http\Controllers\Factoria\IVistaInfo;

class VistaAlumno implements IVistaInfo {
    
    /* public function __construct() 
    {} */


    public function retornarVista($usuario)  : string{

        return view('estudiante.info', compact('usuario'));

    }
}