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
                        <h3>Ujian Kompetensi Kejuruan Sekolah</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-fuchsia">UKK Sekolah</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold" style="font-size:16pt">{{$dataukk2->no_ujian}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-succes text-bold">Teori Pengantar Praktek</h5>
                            </li>
                            <li class="list-group-item">
                                Ruang Ujian<a class="float-right text-bold">{{$dataukk2->ruang_tpp}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataukk2->hari_tpp}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataukk2->waktu_tpp}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-indigo text-bold">Pengambilan Sampel</h5>
                            </li>
                            <li class="list-group-item">
                                Ruangan Ujian<a class="float-right text-bold">{{$dataukk2->ruang_bakteri1}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataukk2->hari_bakteri1}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataukk2->waktu_bakteri1}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-info text-bold">Praktik USK</h5>
                            </li>
                            <li class="list-group-item">
                                Ruangan Ujian<a class="float-right text-bold">{{$dataukk2->ruang_bakteri2}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataukk2->hari_bakteri2}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataukk2->waktu_bakteri2}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-warning text-bold">Pengamatan dan Penginputan</h5>
                            </li>
                            <li class="list-group-item">
                                Ruangan Ujian<a class="float-right text-bold">{{$dataukk2->ruang_hematologi}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataukk2->hari_hematologi}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataukk2->waktu_hematologi}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
