@extends('layouts.dashboard')

@section('head')
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" data-search-pseudo-elements defer crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
@endsection

@section('nav')
<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-dark">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Core</div>
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
                </div>
                <div class="sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="nav-link-icon"><i data-feather="layout"></i></div>
                    Layout
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-dark.html">Dark Sidenav</a><a class="nav-link" href="layout-rtl.html">RTL Layout</a
                        ><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsPageHeaders" aria-expanded="false" aria-controls="collapseLayoutsPageHeaders"
                            >Page Headers
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="collapseLayoutsPageHeaders" data-parent="#accordionSidenavLayout">
                            <nav class="sidenav-menu-nested nav"><a class="nav-link" href="header-simplified.html">Simplified</a><a class="nav-link" href="header-overlap.html">Content Overlap</a><a class="nav-link" href="header-breadcrumbs.html">Breadcrumbs</a><a class="nav-link" href="header-light.html">Light</a></nav>
                        </div>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseComponents" aria-expanded="false" aria-controls="collapseComponents"
                    ><div class="nav-link-icon"><i data-feather="package"></i></div>
                    Components
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseComponents" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="alerts.html">Alerts</a><a class="nav-link" href="avatars.html">Avatars<span class="badge badge-primary ml-2">New!</span></a
                        ><a class="nav-link" href="badges.html">Badges</a><a class="nav-link" href="buttons.html">Buttons</a><a class="nav-link" href="cards.html">Cards</a><a class="nav-link" href="dropdowns.html">Dropdowns</a><a class="nav-link" href="forms.html">Forms</a><a class="nav-link" href="modals.html">Modals</a><a class="nav-link" href="navigation.html">Navigation</a><a class="nav-link" href="progress.html">Progress</a><a class="nav-link" href="toasts.html">Toasts</a><a class="nav-link" href="tooltips.html">Tooltips</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities"
                    ><div class="nav-link-icon"><i data-feather="tool"></i></div>
                    Utilities
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseUtilities" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav">
                        <a class="nav-link" href="animations.html">Animations</a><a class="nav-link" href="background.html">Background<span class="badge badge-primary ml-2">New!</span></a
                        ><a class="nav-link" href="borders.html">Borders</a><a class="nav-link" href="lift.html">Lift<span class="badge badge-primary ml-2">New!</span></a
                        ><a class="nav-link" href="shadows.html">Shadows</a><a class="nav-link" href="typography.html">Typography</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                    ><div class="nav-link-icon"><i data-feather="book-open"></i></div>
                    Pages
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapsePages" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth"
                            >Authentication
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="pagesCollapseAuth" data-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic"
                                    >Basic
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseAuthBasic" data-parent="#accordionSidenavPagesAuth">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="login-basic.html">Login</a><a class="nav-link" href="register-basic.html">Register</a><a class="nav-link" href="password-basic.html">Forgot Password</a></nav>
                                </div>
                                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial"
                                    >Social
                                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="pagesCollapseAuthSocial" data-parent="#accordionSidenavPagesAuth">
                                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="login-social.html">Login</a><a class="nav-link" href="register-social.html">Register</a><a class="nav-link" href="password-social.html">Forgot Password</a></nav>
                                </div>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError"
                            >Error
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                        <div class="collapse" id="pagesCollapseError" data-parent="#accordionSidenavPagesMenu">
                            <nav class="sidenav-menu-nested nav"><a class="nav-link" href="401.html">401 Page</a><a class="nav-link" href="404.html">404 Page</a><a class="nav-link" href="404-glitch.html">404 Page (Glitch Effect)</a><a class="nav-link" href="500.html">500 Page</a></nav>
                        </div>
                        <a class="nav-link" href="blank.html">Blank</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows"
                    ><div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Flows
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                ></a>
                <div class="collapse" id="collapseFlows" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav"><a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a></nav>
                </div>
                <div class="sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html"
                    ><div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                    Charts</a
                ><a class="nav-link" href="tables.html"
                    ><div class="nav-link-icon"><i data-feather="filter"></i></div>
                    Tables</a
                >
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Valerie Luna</div>
            </div>
        </div>
    </nav>
</div>
@endsection

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
            <div class="container-fluid">
                <div class="page-header-content">
                    <h1 class="page-header-title">
                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                        <span>Dashboard</span>
                    </h1>
                    <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt-n10">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">Area Chart Example</div>
                        <div class="card-body">
                            <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">Bar Chart Example</div>
                        <div class="card-body">
                            <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Primary Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Warning Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Success Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Danger Card</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">DataTable Example</div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer mt-auto footer-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 small">Copyright &copy; Your Website 2020</div>
                <div class="col-md-6 text-md-right small">
                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
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