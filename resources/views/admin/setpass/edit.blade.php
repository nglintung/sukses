@extends('admin.layouts.sbadmin')

@section('title')
    <title>Buat Password Login</title>
@endsection

@section('other_style')
<link rel="stylesheet" href="{{ asset('/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{ asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Update Password untuk Login Siswa</h1>
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
            <form method="POST" action="{{ route('admin.updatepass'), $cariuser->id }}" class="ml-2">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label>Siswa yang akan diupdate passwordnya :</label>
                            <br>
                            <input type="text" name="name" id="" class="form-control" value="{{ $cariuser->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Password</label>
                            <input required type="password" class="form-control" name="password" value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Password</button>
                </form>

            </div>
@endsection

@section('isi_script')
<script src="{{ asset('/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
});
</script>
@endsection
