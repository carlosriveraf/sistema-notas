<?php

namespace App\Http\Controllers\Factoria;
use App\Http\Controllers\Factoria\IVistaInfo;

class VistaAdministrador implements IVistaInfo {

  public function retornarVista($usuario)  : string{

    return view('administrador.info', compact('usuario'));

  }
}