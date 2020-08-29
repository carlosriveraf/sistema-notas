@extends('layouts.dashboard')

@section('head')
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>

    <!-- datatable -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous">
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
            <div class="card mb-4">
                <div class="card-header">
                    Mis salones
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">
                        Añadir
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" data-backdrop='static' tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Añadir salón</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                                <button class="btn btn-primary btn-sm" type="button">Guardar cambios</button>
                            </div>
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
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Grado</th>
                                    <th>Seccion</th>
                                    <th>DNI_ADMIN</th>
                                    <th>Nivel</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>
                                        <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i data-feather="more-vertical"></i></button><button class="btn btn-datatable btn-icon btn-transparent-dark"><i data-feather="trash-2"></i></button>
                                    </td>
                                </tr>
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
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/demo/datatables-demo.js') }}"></script>


@endsection