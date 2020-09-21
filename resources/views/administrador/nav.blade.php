<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-dark">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">

                <div class="sidenav-menu-heading">Administración</div>
                
                <a class="nav-link" href="{{ route('user.info') }}">
                    <div class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>Información Personal
                </a>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                    <div class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Usuarios
                    <div class="sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseUsuarios" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="{{ route('usuario-registrar.create') }}">Registrar usuario</a>                       
                    </nav>
                </div>
               

                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseCursos" aria-expanded="false" aria-controls="collapseCursos">
                    <div class="nav-link-icon">
                        <i data-feather="activity"></i>
                    </div>
                    Salones - Cursos
                    <div class="sidenav-collapse-arrow">
                        <i class="fas fa-angle-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseCursos" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="{{ route('salon.index') }}">Crear salón</a>
                        <!-- <a class="nav-link" href="dashboard-2.html">Multipurpose<span class="badge badge-primary ml-2">New!</span></a>
                        <a class="nav-link" href="dashboard-3.html">Affiliate<span class="badge badge-primary ml-2">New!</span></a> -->
                        <a class="nav-link" href="{{ route('curso-registrar.create') }}">Crear curso</a>
                    </nav>
                </div>
                <!-- <div class="sidenav-menu-heading">Profesores</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards"
                    ><div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboards
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="index.html">Default</a><a class="nav-link" href="dashboard-2.html">Multipurpose<span class="badge badge-primary ml-2">New!</span></a
                        ><a class="nav-link" href="dashboard-3.html">Affiliate<span class="badge badge-primary ml-2">New!</span></a>
                    </nav>
                </div> -->
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