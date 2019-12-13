@extends('siswa.layouts.sbadmin')
@section('title')
<title>PortalUN | Log in</title>
@endsection

@section('other_style')
    <style>
    .login-page {
        height: 100%;
        width: 100%;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image:url({{ url('img/background1.jpeg')}});
    }
    .login-logo a {
        color:whitesmoke;
        font-weight: 300;
        font-size: 27pt;
    }

    </style>
@endsection

@section('content')
<body class="login-page fixed-top">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><strong>Sukses UN 2020</strong></a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Login dengan NIS</p>

          <form method="POST" action="{{ route('siswa.login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="input-group mb-3">
              <input id="nis_id" type="nis_id" class="form-control{{ $errors->has('nis_id') ? ' is-invalid' : '' }}" name="nis_id" value="{{ old('nis_id') }}" required autofocus>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user-shield"></span>
                </div>
              </div>
              @if ($errors->has('nis_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nis_id') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-key"></span>
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
                <div class="icheck-primary">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">
                    {{ __('Login') }}
                </button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->
@endsection
