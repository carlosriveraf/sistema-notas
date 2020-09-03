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
@endsection

@section('content')
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        <span>Salones</span>
                    </h1>
                    <div class="page-header-subtitle">Panel de administración de los salones</div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-n10">
            <div class="card card-header-actions mb-4">
                <div class="card-header">
                    Mis salones
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#agregarSalon">
                        Añadir
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="agregarSalon" data-backdrop='static' tabindex="-1" role="dialog" aria-labelledby="agregarSalonTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="agregarSalonTitle">Añadir salón</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <form class="form-signin" role="form" action="{{ route('salon.store') }}" method="POST" onsubmit="myButton.disabled = true; return true;">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="grado" class="small mb-1">grado</label>
                                        <input type="text" class="form-control py-2" name="grado" id="grado" placeholder="grado" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="seccion" class="small mb-1">seccion</label>
                                        <input type="text" class="form-control py-2" name="seccion" id="seccion" placeholder="seccion" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="DNI_ADMIN" class="small mb-1">DNI_ADMIN</label>
                                        <!-- <input type="text" class="form-control py-2" name="DNI_ADMIN" id="DNI_ADMIN" placeholder="DNI_ADMIN" required>  -->
                                        <input type="text" class="form-control py-2" name="DNI_ADMIN" id="DNI_ADMIN" placeholder="DNI_ADMIN" value="{{Auth::user()->DNI}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nivel" class="small mb-1">nivel</label>
                                        <input type="text" class="form-control py-2" name="nivel" id="nivel" placeholder="nivel" required> 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                                    <button class="btn btn-primary btn-sm" type="submit">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Grado</th>
                                    <th>Seccion</th>
                                    <th>DNI_ADMIN</th>
                                    <th>Nivel</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Grado</th>
                                    <th>Seccion</th>
                                    <th>DNI_ADMIN</th>
                                    <th>Nivel</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($salones as $salon)
                                    <tr>
                                        <td>{{$salon->grado}}</td>
                                        <td>{{$salon->seccion}}</td>
                                        <td>{{$salon->DNI_ADMIN}}</td>
                                        <td>{{$salon->nivel}}</td>
                                        <td>
                                            <form action="">
                                                <button class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i>                                        
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('salon.destroy', ['grado' => $salon->grado, 'seccion' => $salon->seccion]) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <form action="">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2">
                                                <i class="fas fa-edit"></i>                                        
                                            </button>
                                            </form>
                                        <form action="">
                                            <button class="btn btn-datatable btn-icon btn-transparent-dark">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
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
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>
@endsection