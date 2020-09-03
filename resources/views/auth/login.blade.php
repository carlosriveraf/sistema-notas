<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Nombre Institución</title>

    {{-- <link rel="shortcut icon" href="{{ asset('img/logoMini.png') }}" type="image/png" /> --}}

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('startbootstrap/vendor/bootstrap/scss/examples/signin.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap4/js/dist/util.js') }}"></script>
    <script src="{{ asset('bootstrap4/js/dist/alert.js') }}"></script>--}}

    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="text-center">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                            {{--<div class="card shadow-lg border-0 rounded-lg">--}}
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-light my-4">Nombre Institución</h3>
                                </div>
                                <div class="card-body">
                                    <form class="form-signin" role="form" action="{{ route('login') }}" method="POST" onsubmit="myButton.disabled = true; return true;">
                                        @csrf
                                        <div class="form-group">
                                            {{-- <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter email address"> --}}
                                            
                                            {{-- <label for="DNI" class="small mb-1">DNI</label> --}}
                                            <input type="text" class="form-control py-4" name="DNI" placeholder="DNI" required autofocus>

                                        </div>
                                        <div class="form-group">
                                            {{-- <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password"> --}}

                                            {{-- <label for="password" class="small mb-1">Contraseña</label> --}}
                                            <input type="password" class="form-control py-4" name="password" placeholder="Contraseña" required> 

                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                            </div>
                                        </div> --}}
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            {{-- <a class="small" href="password-basic.html">Forgot Password?</a>
                                            <a class="btn btn-primary" href="index.html">Login</a> --}}

                                            <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

                                        </div>

                                        <div class="form-group mt-4 mb-0">
                                            <a href="#">¿Olvidaste tu cuenta?</a>
                                            <p>© 2020</p>
                                        </div>

                                    </form>
                                </div>
                                {{-- <div class="card-footer text-center">
                                    <div class="small"><a href="register-basic.html">Need an account? Sign up!</a></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>