@extends('admin.layouts.sbadmin')

@section('title')
    <title>Detail {{ $datasiswa->name }} </title>
@endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content mt-3">
            <div class="container-fluid">
            <!-- About Me Box -->
            <div class="card card-primary">
                <div class="card-header">
                <h3 class="card-title">Data Pribadi <u>{{ $datasiswa->name }}</u></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <strong>NIS </strong>
                    <p class="text-muted" style="font-size:15pt">{{ $datasiswa->nis_id }}
                    </p>
                    <hr>
                    <strong>NISN</strong>
                    <p class="text-muted" style="font-size:15pt">{{ $datasiswa->nisn }}</p>
                    <hr>
                    <strong>Kelas</strong>
                    <p class="text-muted" style="font-size:15pt">{{ $datasiswa->kelas }}
                    </p>
                    <hr>
                    <strong>Tanggal Lahir</strong>
                    <p class="text-muted" style="font-size:15pt">{{ $datasiswa->ttl }}</p>
                    <hr>
                    <strong>Nama Ortu</strong>
                    <p class="text-muted" style="font-size:15pt">{{ $datasiswa->namaortu }}</p>
                    <hr>
                    <a href=" {{ route('admin.daftarsiswa')}}/edit/{{ $datasiswa->id}} " class="btn btn-info">Edit Data Siswa</a>
                </div>
                <!-- /.card-body -->
            </div>


            </div>
@endsection
