@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <input type="text" name="DNI" value="74415678">
                        <input type="text" name="password" value="74415678">
                        <input type="text" name="password_confirmation" value="74415678">
                        <input type="text" name="apellidoPaterno" value="Rivera">
                        <input type="text" name="apellidoMaterno" value="Franco">
                        <input type="text" name="nombres" value="Carlos Eduardo">
                        <input type="date" name="fechaNacimiento" value="1999-11-22">
                        <input type="text" name="sexo" value="H">
                        <input type="text" name="direccion" value="Jr. San Martín 3609">
                        <input type="text" name="email" value="carlos_2017_1@hotmail.com">
                        <input type="text" name="telefono" value="4565099">
                        <input type="text" name="celular" value="982907877">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
