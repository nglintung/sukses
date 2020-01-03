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
                        <h3>Ujian Teori Pengantar Praktek</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-primary">Teori Pengantar Praktek UKK Nasional</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                Ruang Ujian<a class="float-right text-bold">R. 1 s.d 6</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">Senin, 20 Januari 2020</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">Jam 08.00 s.d 10.00 WIB</a>
                            </li>
                        </ul>
                </div>
            </div>

        </section>
