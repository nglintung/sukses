<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  @yield('title')
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
<link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('other_style')

</head>
<body class="hold-transition sidebar-mini">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-dark bg-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search text-white"></i>
                    </button>
                </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->

            </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href=" {{ url('/admin') }} " class="brand-link">
                <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('dist/img/user2-160x160.jpg') }} " class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
                </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <!-- Start UKK -->
                    <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users text-primary"></i>
                        <p>Data Siswa <i class="right fas fa-arrow-circle-left text-primary"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item" style="margin-left:10px">
                        <a href="{{ route('admin.daftarsiswa') }}" class="nav-link">
                            <i class="fas fa-th-list nav-icon"></i>
                            <p>Daftar Siswa</p>
                        </a>
                        </li>
                        <li class="nav-item" style="margin-left:10px">
                        <a href="{{ route('admin.tambahsiswa') }}" class="nav-link">
                            <i class="fas fa-user-plus nav-icon"></i>
                            <p>Tambah Data Siswa</p>
                        </a>
                        </li>
                    </ul>
                    </li>

                    <!-- Start Password -->
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                                <i class="fas fa-key nav-icon text-danger"></i>
                                <p>Data Password<i class="right fas fa-arrow-circle-left text-danger"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('admin.indexpass') }}" class="nav-link">
                                <i class="fas fa-th-list nav-icon"></i>
                                <p>Daftar Password Siswa</p>
                            </a>
                            </li>
                            <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('admin.createpass') }}" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Generate Password</p>
                            </a>
                            </li>

                        </ul>
                    </li>

                    <!-- USK Password -->
                                        <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                                <i class="fas fa-key nav-icon text-warning"></i>
                                <p>Password USK<i class="right fas fa-arrow-circle-left text-warning"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('admin.indexusk')}} " class="nav-link">
                                <i class="fas fa-th-list nav-icon"></i>
                                <p>Daftar Password USK</p>
                            </a>
                            </li>
                            <li class="nav-item" style="margin-left:10px">
                            <a href="{{ route('admin.createusk')}}" class="nav-link">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Generate Password USK</p>
                            </a>
                            </li>

                        </ul>
                    </li>
                </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
            </aside>

@yield('content')


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
@yield('isi_script')
</html>
