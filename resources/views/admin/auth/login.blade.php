@extends('siswa.layouts.sbadmin')

@section('title')
<title>Login Admin SUKSES UN 2020</title>

@section('other_style')


@section('content')
<body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b> SUKSES UN 2020</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body" style="background:#0400ff7d">
          <p class="login-box-msg text-white" style="font-size:16pt">Masuk menggunakan email</p>

          <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope text-white"></span>
                    </div>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock text-white"></span>
                </div>
              </div>
              @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary text white">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember" style="color:white">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-warning btn-block"><strong>Sign In</strong></button>
              </div>
              <!-- /.col -->
            </div>
          </form>

@endsection
