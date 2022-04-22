@extends('layouts.app')

@section('content')
<div class="container">
<main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
          <div class="logo">
                <img src="img/logo.png" alt="Flight Template">
            </div>
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title">FLIGHT</h1>
            <form method="POST" action="{{ route('login') }}">
                        @csrf
              <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="email" name="email" id="email" placeholder="nombre@dominio.com"
                class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group mb-4">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password"
                 class="form-control @error('password') is-invalid @enderror" name="password" 
                 required autocomplete="current-password" placeholder="Contraseña">
                 @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <button name="login" id="login" class="btn btn-block login-btn" type="submit">
                                    {{ __('Iniciar sesión') }}</button>
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
