@extends('siswa.layouts.sbadmin')
@section('title')
    <title>SUKSES UN 2020 KARTEK2</title>
@endsection

@section('bodytag')
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
@include('siswa.layouts.navbarfm')

@section('content')
    <!-- Start Content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header ml-3 mt-3">
            <div class="container-fluid">
            <div class="row mb-2">
                    <div class="col-sm-12">
                        <h3>Ujian Kompetensi Kejuruan Nasional Prodi Farmasi</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-teal">UKK Nasional Prodi Farmasi</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold">{{ $ukknasfm->no_ujian }}</a>
                            </li>
                            <li class="list-group-item">
                                Kode Kelompok<a class="float-right text-bold" style="font-size:16pt">{{$ukknasfm->kode_kelompok}}</a>
                            </li>
                            <li class="list-group-item">
                                Nama Asesor<a class="float-right text-bold" style="font-size:16pt">{{$ukknasfm->asesor}}</a>
                            </li>
                            {{-- Hari 1 --}}
                            <li class="list-group-item">
                                <h5 class="text-succes text-bold">Teori Pengantar Praktek</h5>
                            </li>
                            <li class="list-group-item">
                                Ruang Ujian<a class="float-right text-bold">Ruang 1 s.d Ruang 11</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">Senin, 20 Januari 2020</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">Jam 07.00 WIB - Selesai </a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-fuchsia text-bold">Praktek Ilmu Resep dan Administrasi</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{ $ukknasfm->hari_pira_nas }}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{ $ukknasfm->waktu_pira_nas }}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">{{ $ukknasfm->ruang_pira_nas }}</a>
                            </li>
                            {{-- Hari 2 --}}
                            {{-- Pembacaan Keputusan --}}

                        </ul>
            </div>

        </section>
