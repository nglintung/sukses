@extends('siswa.layouts.sbadmin')
@section('title')
    <title>SUKSES UN 2020 KARTEK2</title>
@endsection

@section('bodytag')
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">

@include('siswa.layouts.navbar')

@section('content')
    <!-- Start Content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header ml-3 mt-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h2>Identitas Pribadi Siswa</h2>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <!-- Profile Image -->
            <div class="card card-fuchsia card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src=" {{ asset('/img/profile.png')}} "
                             alt="User profile picture">
                      </div>

                      <h3 class="profile-username text-center">{{$datasiswa->name}}</h3>

                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>NIS</b> <a class="float-right">{{$datasiswa->nis_id}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>NISN</b> <a class="float-right">{{$datasiswa->nisn}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Kelas</b> <a class="float-right">{{$datasiswa->kelas}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tempat & Tanggal Lahir</b> <a class="float-right">{{$datasiswa->tempat}}, {{$datasiswa->ttl}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>Nama Orang tua</b> <a class="float-right">{{$datasiswa->namaortu}}</a>
                        </li>

                      </ul>

                      {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
            </div>

        </section>


    <!-- End Content -->
    </div>

</div>

@endsection

