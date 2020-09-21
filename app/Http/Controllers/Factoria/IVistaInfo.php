<?php

namespace App\Http\Controllers\Factoria;

interface IVistaInfo {
    
  public function retornarVista($usuario) : string;

}