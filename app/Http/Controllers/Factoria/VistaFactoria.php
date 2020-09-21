<?php

namespace App\Http\Controllers\Factoria;

use App\Http\Controllers\Factoria\VistaAlumno;
use App\Http\Controllers\Factoria\IVistaInfo;

class VistaFactoria {
    
    public function getVista($vista) : IVistaInfo
    {
        switch ($vista) {
            case 'RBAC-AD':
                return new VistaAdministrador();
                break;
            case 'RBAC-ST':
                return new VistaAlumno();
                break;
            case 'RBAC-TE':
                return new VistaProfesor();
                break;
        }
        
    }

  
}