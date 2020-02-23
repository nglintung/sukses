@extends('siswa.layouts.sbadmin')
@section('title')
    <title>SUKSES UN 2020 KARTEK 2</title>
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
                        <h3>Ujian TRY OUT UNBK Ke - 3</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-danger"></div>
                    <div class="card-body" >
                        <ul class="list-group list-group-unbordered mb-3">
                            {{-- Hari 1 --}}
                            <li class="list-group-item">
                                <h5 class="text-succes text-bold">Detail Peserta</h5>
                            </li>
                            <li class="list-group-item">
                                No. Peserta<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->nopes}}</a>
                            </li>
                            <li class="list-group-item">
                                Nama<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->peserta}}</a>
                            </li>
                            <li class="list-group-item">
                                Ruang<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->ruang}}</a>
                            </li>
                            <li class="list-group-item">
                                Client<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->client}}</a>
                            </li>
                            <li class="list-group-item">
                                Server<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->server}}</a>
                            </li>
                            <li class="list-group-item">
                                Sesi<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->sesi}}</a>
                            </li>
                            <li class="list-group-item">
                                Waktu<a class="float-right text-bold" style="font-size:16pt">{{$tryout2->waktu}}</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-primary text-bold">Senin, 2 Maret 2020</h5>
                            </li>
                            <li class="list-group-item">
                                Mapel<a class="float-right text-bold" style="font-size:16pt">Bahasa Indonesia</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-primary text-bold">Selasa, 3 Maret 2020</h5>
                            </li>
                            <li class="list-group-item">
                                Mapel<a class="float-right text-bold" style="font-size:16pt">Matematika</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-primary text-bold">Rabu, 4 Maret 2020</h5>
                            </li>
                            <li class="list-group-item">
                                Mapel<a class="float-right text-bold" style="font-size:16pt">Bahasa Inggris</a>
                            </li>
                            <li class="list-group-item">
                                <h5 class="text-primary text-bold">Kamis, 5 Maret 2020</h5>
                            </li>
                            <li class="list-group-item">
                                Mapel<a class="float-right text-bold" style="font-size:16pt">Teori Kejuruan (Assesmen)</a>
                            </li>


                        </ul>
            </div>
                </div>
            </div>

        </section>
