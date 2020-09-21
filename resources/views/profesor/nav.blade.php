<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-dark">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="sidenav-menu-heading">Profesor</div>

                <a class="nav-link" href="{{ route('user.info') }}">
                    <div class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>Información Personal
                </a>                
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
                    <div class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Cursos
                    <div class="sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseCursos" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="{{ route('profesor.cursos') }}">Cursos Dictados</a>
                        <a class="nav-link" href="{{ route('profesor.ingresar') }}">Ingresar notas</a>
                        <a class="nav-link" href="{{ route('profesor.alumnos') }}">Reporte de alumnos</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Registrado como:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->apellidoPaterno." ".Auth::user()->apellidoMaterno.", ".Auth::user()->nombres }}</div>
            </div>
        </div>
    </nav>
</div>