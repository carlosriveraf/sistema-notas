<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @yield('head')

</head>
<body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a href="/home" class="navbar-brand d-none d-sm-block">Nombre Institución</a>
            <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            
            <ul class="navbar-nav align-items-center ml-auto">       
                <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                    <div class="dropdown-user-details-email">
                        {{ Auth::user()->apellidoPaterno." ".Auth::user()->apellidoMaterno.", ".Auth::user()->nombres }}
                    </div>
                </li>
                <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                    <a href="javascript:void(0);" class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-fluid" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"/>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                        <h6 class="dropdown-header d-flex align-items-center">
                            <img class="dropdown-user-img" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" />
                            <div class="dropdown-user-details">
                                <div class="dropdown-user-details-name">
                                    {{ Auth::user()->apellidoPaterno." ".Auth::user()->apellidoMaterno }}
                                </div>
                                <div class="dropdown-user-details-email">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                        </h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="dropdown-item-icon">
                                <i data-feather="settings"></i>
                            </div>
                            Configuración
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="dropdown-item-icon">
                                <i data-feather="log-out"></i>
                            </div>
                            Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>

        @yield('content')
             
        {{--
        <div id="layoutSidenav">
            @include('administrador.nav')
            @include('estudiante.nav')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('footer')
            </div>
        </div>
        --}}
        
        @yield('scripts')

    </body>
</html>