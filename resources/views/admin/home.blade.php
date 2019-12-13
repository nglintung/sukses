@extends('admin.layouts.sbadmin')
@section('title')
    <title>Dashboard Admin SUKSES UN 2020</title>
@endsection

@section('other_style')

@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            {{-- Widget 1 --}}
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                    <h3> {{$siswacount}} </h3>

                    <p>Siswa Terdaftar</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="{{ route('admin.daftarsiswa') }}" class="small-box-footer">
                    Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-danger">
                    <div class="inner">
                    <h3> {{$listpassword}} </h3>

                    <p>Password Siswa</p>
                    </div>
                    <div class="icon">
                    <i class="fas fa-user-lock"></i>
                    </div>
                    <a href="{{ route('admin.indexpass') }}" class="small-box-footer">
                    Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    {{-- <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
    </aside>
    <!-- /.control-sidebar --> --}}

    <!-- Main Footer -->
    <footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <strong>Copyright &copy; SMK KARTEK 2 Jatilawang</strong> All rights reserved.
    </footer>
</div>
        <!-- ./wrapper -->
@endsection
