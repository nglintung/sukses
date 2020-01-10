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
                        <h3>Ujian Kompetensi Kejuruan Sekolah Prodi Farmasi</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-teal">UKK Sekolah Prodi Farmasi</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold">{{ $ukknasfm->no_ujian }}</a>
                            </li>
                            {{-- Hari 1 --}}
                            <li class="list-group-item">
                                <h5 class="text-fuchsia text-bold">Praktek Ilmu Resep dan Administrasi</h5>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{ $ukknasfm->hari_pira_sek }}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{ $ukknasfm->waktu_pira_sek }}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold">{{ $ukknasfm->ruang_pira_sek }}</a>
                            </li>
                            {{-- Hari 2 --}}
                            {{-- Pembacaan Keputusan --}}

                        </ul>
            </div>

        </section>
