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
                            <span>Asignar Profesor</span>
                        </h1>
                        <div class="page-header-subtitle">Formulario para asignar Profesor a Cursos</div>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('asignar.curso') }}">
                @csrf           
                <div class="container-fluid mt-n10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    Primaria
                                </div>
                                <div class="card-body"> 
                                    @foreach($cursos as $curso) 
                                        @if($curso->salon_nivel == 'P')
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="{{$curso->ID}}" name="ID[]" value="{{$curso->ID}}" type="checkbox">
                                                <label class="custom-control-label" for="{{$curso->ID}}">{{$curso->salon_grado}}° Grado - {{$curso->nombre}}</label>
                                            </div>                                       
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class=col-md-6>
                            <div class="card mb-4">
                                <div class="card-header">
                                    Secundaria 
                                </div>
                                <div class="card-body">
                                    @foreach($cursos as $curso) 
                                        @if($curso->salon_nivel == 'S')
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="{{$curso->ID}}" name="ID[]" value="{{$curso->ID}}" type="checkbox">
                                                <label class="custom-control-label" for="{{$curso->ID}}">{{$curso->salon_grado}}° Grado - {{$curso->nombre}}</label>
                                            </div>                                       
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" value="{{$request->DNI}}" name="DNI" id="DNI">
                <div class= "text-center">
                    <button class="btn btn-primary" type="submit">Asignar Curso</button> 
                </div>
                    
            </form>


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