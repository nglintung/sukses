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
                        <h3>Ujian Sertifikasi Komputer</h3>
                        <h5 class="text-maroon">Universitas AMIKOM Purwokerto</h5>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-info">Detail USK Teori dan Praktek</div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                No Ujian<a class="float-right text-bold">{{$datausk->no_ujian}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-orange text-bold">Ujian Teori</h5>
                            </li>
                            <li class="list-group-item">
                                Ruang USK Teori<a class="float-right text-bold">{{$datausk->ruang_usk_teori}}</a>
                            </li>
                            <li class="list-group-item">
                                Hari USK Teori<a class="float-right text-bold">Minggu, 5 Januari 2020</a>
                            </li>
                            <li class="list-group-item">
                                Waktu USK Teori<a class="float-right text-bold">Jam 07.30 - 10.00 WIB</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-purple text-bold">Ujian Praktek</h5>
                            </li>
                            <li class="list-group-item">
                                Hari Praktek USK<a class="float-right text-bold">{{$datausk->hari_usk}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu Praktek USK<a class="float-right text-bold">{{$datausk->waktu_usk}}</a>
                            </li>
                            <li class="list-group-item">
                                Ruangan Praktek USK<a class="float-right text-bold">{{$datausk->ruang_usk_praktek}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
