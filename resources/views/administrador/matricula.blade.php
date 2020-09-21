@extends('layouts.dashboard')

@section('head')
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div id="layoutSidenav">
    @include('administrador.nav')
    <div id="layoutSidenav_content">
        <main>
            <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                <div class="container-fluid">
                    <div class="page-header-content">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            <span>Matrícula Alumno</span>
                        </h1>
                        <div class="page-header-subtitle">Formulario para el registro de matrícula</div>
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
                <form method="POST" action="{{ route('matricula.alumno') }}">
                    @csrf
                        
                    <!-- <div class="form-group col-md-6">
                        <label for="DNI">DNI</label>
                        <input class="form-control" type="text" name="DNI" id="DNI" required>
                    </div> -->
                    
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="salon_nivel">Nivel</label>
                            <select name="salon_nivel" id="salon_nivel" class="form-control">
                                <option value="P" selected>Primaria</option>
                                <option value="S">Secundaria</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="salon_grado">Grado</label>
                            <input class="form-control" type="text" name="salon_grado" id="salon_grado" required>
                            <input type="hidden" value="{{$request->DNI}}" name="DNI" id="DNI">
                        </div>                        
                    </div>

                    
                    <button class="btn btn-primary" type="submit">Grabar datos</button>
                </form>
                </div>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    {{--<script src="assets/demo/datatables-demo.js"></script>--}}
@endsection