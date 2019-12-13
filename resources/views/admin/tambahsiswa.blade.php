@extends('admin.layouts.sbadmin')

@section('title')
    <title>Tambah Data Siswa</title>
@endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <form action="{{ route('admin.daftarsiswa')}}" method="POST" class="form-group col-lg-6">
                    @csrf
                    <input type="text" class="form-control mb-1" placeholder="Nama Siswa" name="name" autofocus required>
                    <input type="text" class="form-control mb-1" placeholder="NIS Siswa" name="nis_id" required tabindex="1">
                    <input type="text" class="form-control mb-1" placeholder="NISN Siswa" name="nisn" required tabindex="2">
                    <input type="date" class="form-control mb-1" placeholder="Nama Siswa" name="ttl" tabindex="3">
                    <select class="form-control mb-1" name="kelas" required tabindex="4">
                        <option>XII FM 1</option>
                        <option>XII FM 2</option>
                        <option>XII FM 3</option>
                    </select>
                    <input type="text" class="form-control mb-2" placeholder="Nama Wali Murid" name="namaortu" tabindex="5">
                    <button type="submit" class="btn btn-primary" tabindex="6">Simpan Data</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>

            </div>
@endsection
