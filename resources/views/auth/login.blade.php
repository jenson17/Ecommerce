@extends('template.main')

@section('title','Login')

@section('contend')
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">
            <b>
                Ecommerce
            </b>
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">
            Ingrese sus datos de acceso
        </p>
        <form action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="form" method="POST">
            @csrf
            <div class="form-group has-feedback">
                <input autofocus="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="example@gmail.com" type="email" value="{{ old('email') }}">
                    <i aria-hidden="true" class="fa fa-envelope form-control-feedback">
                    </i>
                    @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $errors->first('email') }}
                        </strong>
                    </span>
                    @endif
                </input>
            </div>
            <div class="form-group has-feedback">
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="**********" type="password">
                    <i aria-hidden="true" class="fa fa-lock form-control-feedback">
                    </i>
                    @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $errors->first('password') }}
                        </strong>
                    </span>
                    @endif
                </input>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="form-check">
                        <label class="form-check-label" for="remember">
                            {{ __('Recuerdame') }}
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button class="btn btn-primary btn-block" type="submit">
                        {{ __('Login') }}
                        <i aria-hidden="true" class="fa fa-sign-in">
                        </i>
                    </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a class="text-small forgot-password text-black" href="{{ route('password.request') }}">
            {{ __('Olvido su contraseña?') }}
        </a>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
