<?php

namespace App\Http\Controllers\Factoria;
use App\Http\Controllers\Factoria\IVistaInfo;

class VistaProfesor implements IVistaInfo {
    
  public function retornarVista($usuario)  : string{

    return view('profesor.info', compact('usuario'));

  }
}