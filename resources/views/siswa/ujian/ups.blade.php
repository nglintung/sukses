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
                        <h3>Ujian Praktek Sekolah</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-primary">Ujian Praktek Sekolah</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold">{{$dataups->no_ujian}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-succes text-bold">Ujian Agama</h5>
                            </li>
                            <li class="list-group-item">
                                Ruang Ujian<a class="float-right text-bold">Studio 1</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataups->hari_agama}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataups->waktu_agama}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-indigo text-bold">UJIAN IPA (FIS, KIM, BIO)</h5>
                            </li>
                            <li class="list-group-item">
                                Ruangan Ujian<a class="float-right text-bold">L. 14, 15</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataups->hari_ipa}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataups->waktu_ipa}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-info text-bold">UJIAN Praktek Olah Raga</h5>
                            </li>
                            <li class="list-group-item">
                                Lokasi Ujian<a class="float-right text-bold">Lap. DIPO, Lt. 4</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataups->hari_or}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">Jam 07.00 WIB s.d selesai</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-warning text-bold">UJIAN Kewirausahaan (Tertulis)</h5>
                            </li>
                            <li class="list-group-item">
                                Ruangan Ujian<a class="float-right text-bold">{{$dataups->ruang_wirausaha}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari<a class="float-right text-bold">{{$dataups->hari_wirausaha}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold">{{$dataups->waktu_wirausaha}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
