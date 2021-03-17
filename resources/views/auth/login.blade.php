@extends('layouts.app')

@section('content')
<div class="container">
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
          
            <img src="assets/images/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <h1 class="login-card-img" id="fh5co-logo"><a href="index.html"><i class="icon-airplane"></i>Travel System</a></h1>
              </div>
              <p class="login-card-description">Iniciar sesión en su cuenta</p>
              <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" placeholder="Correo electronico"
                     class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Contraseña</label>
                    <input type="password" name="password" id="password" placeholder="***********"
                    class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> 
                  </div>
                  <button type="submit"class="btn btn-block login-btn mb-4">
                                    {{ __('Iniciar sesión') }}
                                </button>
                </form>
                <a href="#!" class="forgot-password-link">Se te olvidó tu contraseña?</a>
                
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </main>
    
</div>
@endsection
