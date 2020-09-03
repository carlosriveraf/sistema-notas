@extends('layouts.dashboard')

@section('head')
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>

    <!-- datatable -->
    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}"> -->

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
@endsection

@section('content')
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        <span>Registro de usuarios</span>
                    </h1>
                    <div class="page-header-subtitle">Formulario para el registro de usuarios</div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-n10">
            <div class="card mb-4">
                <!-- <div class="card-header">
                    Mis salones
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#agregarSalon">
                        Añadir
                    </button>
                </div> -->
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        
                    <!-- <div class="form-group col-md-6">
                        <label for="DNI">DNI</label>
                        <input class="form-control" type="text" name="DNI" id="DNI" required>
                    </div> -->
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="apellidoPaterno">Apellido Paterno</label>
                            <input class="form-control" type="text" name="apellidoPaterno" id="apellidoPaterno" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="apellidoMaterno">Apellido Materno</label>
                            <input class="form-control" type="text" name="apellidoMaterno" id="apellidoMaterno" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nombres">Nombres</label>
                            <input class="form-control" type="text" name="nombres" id="nombres" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="DNI">DNI</label>
                            <input class="form-control" type="text" name="DNI" id="DNI" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label>Sexo</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio1" type="radio" name="sexo" value="H">
                                <label class="custom-control-label" for="customRadio1">Hombre</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="customRadio2" type="radio" name="sexo" value="M">
                                <label class="custom-control-label" for="customRadio2">Mujer</label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nombre_rol">Rol de la persona</label>
                            <select name="nombre_rol" id="nombre_rol" class="form-control">
                                <option value="RBAC-AD" selected>Administrador</option>
                                <option value="RBAC-ST">Estudiante</option>
                                <option value="RBAC-TE">Profesor</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="telefono">Teléfono de casa</label>
                            <input class="form-control" type="text" name="telefono" id="telefono" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="celular">Celular</label>
                            <input class="form-control" type="text" name="celular" id="celular" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email">Correo electrónico</label>
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="direccion">Domicilio</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" required>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Grabar datos</button>
                </form>
                </div>
            </div>
        </div>
    </main>
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
    <!-- <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script> -->
@endsection