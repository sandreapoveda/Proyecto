@extends('layouts.app')
@section('content')
<div class="form-body" class="container-fluid">
    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                @if(\Session::has('message'))
                <p class="alert alert-info">
                    {{ \Session::get('message') }}
                </p>
            @endif
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <a href="index.html">
                        <div class="logo">
                            <img class="logo-size" src="{{ asset('css/capture/images/logo2.png')}}" alt="" style="width: 400px;">
                        </div>
                    </a>
                    <h3>Te invitamos a que seas parte de nosotros</h3>
                    <p>Accede para obtener nuestros servicios</p>
                    <div class="page-links">
                        <a href="index.jsp" class="active">Iniciar sesión</a><a href="registrar.jsp">Registrate</a>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h6>Nombre de usuario</h6>
                        <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        <h6>Contraseña</h6>
                        <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        <div class="col-6 text-right">
                            <a class="btn btn-link px-0" href="{{ route('password.request') }}"  style="color: #fed181">
                                {{ trans('global.forgot_password') }}
                            </a>
                        </div>
                            <div class="form-button">
                                <button type="submit" class="ibtn">
                                    {{ trans('global.login') }}
                                </button>
                            </div>
                    </form>
                    <div class="other-links">
                        <span>Contáctanos</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                    </div>
        </div>
    </div>
</div>

@endsection