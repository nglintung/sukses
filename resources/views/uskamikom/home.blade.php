@extends('uskamikom.layouts.sbadmin')
@section('title')
    <title>USK AMIKOM 2020</title>
@endsection

@section('bodytag')
<body class="hold-transition sidebar-mini layout-navbar-fixed">
<div class="wrapper">
@include('uskamikom.layouts.navbar')

@section('content')
    <!-- Start Content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header ml-3 mt-3">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 text-center">
                        <h2 style="color:darkblue">Ujian Sertifikasi Komputer (USK)</h2>
                        <h3>Universitas AMIKOM Purwokerto</h3>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main Content -->
        <section class="content ml-3">
            <div class="container-fluid">
                <div class="card">
                <div class="card-header bg-warning">Pengumuman !!</div>
                    <div class="card-body" >
                        <p class="card-text">Terimakasih telah menyelesaikan administrasi Ujian Sertifikasi Komputer (USK) Universitas AMIKOM Purwokerto "<b>Sarana Pasti Meraih Prestasi</b>"</p>
                        <p class="card-text">Untuk detail Jadwal Ujian Tertulis dan Praktik silahkan klik 3 strip garis kiri atas kemudian klik detail jadwal.</p>
                        <p class="card-text">Demikian terimakasih, semoga sukses selalu.</p>
                    </div>
                </div>
            </div>

        </section>

    </div>




<!-- End Content -->
</div>

@endsection

