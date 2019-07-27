@extends('template.main')

@section('title','Registro')

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
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="login-box-msg">
                            Registro
                        </p>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group has-feedback">
                                <input autocomplete="name" autofocus="" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nombre" required="" type="text" value="{{ old('name') }}">
                                    <i aria-hidden="true" class="fa fa-user form-control-feedback">
                                    </i>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                            <div class="form-group has-feedback">
                                <input autocomplete="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Correo" required="" type="email" value="{{ old('email') }}">
                                    <i aria-hidden="true" class="fa fa-envelope form-control-feedback">
                                    </i>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                            <div class="form-group has-feedback">
                                <input autocomplete="new-password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" required="" type="password">
                                    <i aria-hidden="true" class="fa fa-lock form-control-feedback">
                                    </i>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                    @enderror
                                </input>
                            </div>
                            <div class="form-group has-feedback">
                                <input autocomplete="new-password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirmar Contraseña" required="" type="password">
                                    <i aria-hidden="true" class="fa fa-lock form-control-feedback">
                                    </i>
                                </input>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary center block" type="submit">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</div>