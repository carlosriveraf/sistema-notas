@extends('layouts.dashboard')

@section('head')
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    
    <!-- datatable -->
    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <style>
        .icono{
            color: black;
            text-align: center;
        }
        .encabezado{
            color: black;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
<div id="layoutSidenav">
    @include('estudiante.nav')
    <div id="layoutSidenav_content">
    <main>
       <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        <span>Información personal</span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-n10">
            <div class="card col-md-6 mx-auto">
                <!-- Modal -->
                <table class="table table-bordered table-hover mt-3" width="100%" cellspacing="0">
                        <tbody>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-id-card"></i>
                                </td>
                                <td>
                                    <span class="encabezado">DNI</span> 
                                </td>                               
                                <td>{{$usuario->DNI}}</td>
                            </tr>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-user"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Nombres</span>
                                </td>
                                <td>{{$usuario->nombres}}</td>
                            </tr> 
                            <tr>
                                <td class="icono">
                                    <i class="far fa-user"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Apellidos</span>
                                </td>
                                <td>{{$usuario->apellidoPaterno}} {{$usuario->apellidoMaterno}}</td>
                            </tr>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-calendar-alt"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Fecha Nacimiento</span>
                                </td>
                                <td>{{$usuario->fechaNacimiento}}</td>
                            </tr>
                            <tr>                                
                                @if($usuario->sexo == 'H')
                                    <td class="icono">
                                        <i class="fas fa-male"></i>
                                    </td>
                                    <td>
                                        <span class="encabezado">Género</span>
                                    </td>
                                    <td>Hombre</td>                                    
                                @else
                                    <td class="icono">
                                        <i class="fas fa-female"></i>
                                    </td>
                                    <td>
                                        <span class="encabezado">Género</span>
                                    </td>
                                    <td>Mujer</td> 
                                @endif
                            </tr>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-envelope"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Correo Electrónico</span>
                                </td>
                                <td>{{$usuario->email}}</td>
                            </tr>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-phone"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Número de teléfono</span>
                                </td>
                                <td>{{$usuario->telefono}}</td>
                            </tr>
                            <tr>
                                <td class="icono">
                                    <i class="fas fa-mobile-alt"></i> 
                                </td>
                                <td>
                                    <span class="encabezado">Número de celular</span>
                                </td>
                                <td>{{$usuario->celular}}</td>
                            </tr>
                            <tr>
                            <td class="icono">
                                    <i class="fas fa-map-marked-alt"></i>
                                </td>
                                <td>
                                    <span class="encabezado">Domicilio</span>
                                </td>
                                <td>{{$usuario->direccion}}</td>
                            </tr>

                        </tbody>
                </table>
            </div>
        </div>
    </main>
    @include('footer')
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    {{--<script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>--}}

    <!-- script de tablas -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
@endsection