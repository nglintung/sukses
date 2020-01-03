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
                        <h3>Ujian Kompetensi Kejuruan Nasional</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-teal">UKK Nasional</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold">{{ $ukknas->no_ujian }}</a>
                            </li>
                            {{-- Hari 1 --}}
                            <li class="list-group-item">
                                <h5 class="text-fuchsia text-bold">Ujian Bakteriologi Hari 1</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{ $ukknas->hari_bakteri1 }}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{ $ukknas->waktu_bakteri1 }}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">{{ $ukknas->ruang_bakteri1 }}</a>
                            </li>
                            {{-- Hari 2 --}}
                            <li class="list-group-item">
                                <h5 class="text-teal text-bold">Ujian Bakteriologi Hari 2</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{ $ukknas->hari_bakteri2 }}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{ $ukknas->waktu_bakteri2 }}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">{{ $ukknas->ruang_bakteri2 }}</a>
                            </li>
                            {{-- Hematologi --}}
                            <li class="list-group-item">
                                <h5 class="text-primary text-bold">Ujian Hematologi</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{ $ukknas->hari_hema }}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{ $ukknas->waktu_hema }}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">{{ $ukknas->ruang_hema }}</a>
                            </li>
                            {{-- Pembacaan Keputusan --}}
                            <li class="list-group-item">
                                <h5 class="text-warning text-bold">Pembacaan Keputusan</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">Sabtu, 25 Januari 2020</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">Jam 15.30 s.d selesai</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">R. 1 s.d 6</a>
                            </li>
                        </ul>
            </div>

        </section>
