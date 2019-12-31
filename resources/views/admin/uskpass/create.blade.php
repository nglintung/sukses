@extends('admin.layouts.sbadmin')

@section('title')
    <title>Buat Password Login USK Amikom</title>
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
                <h1 class="m-0 text-dark">Generate Password untuk Login Siswa USK Amikom</h1>
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
            <form method="POST" action="{{ route('admin.storeusk') }}" class="ml-2">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <label>Pilih nama siswa yang akan dibuatkan password ( NAMA - [NIS] )</label>
                            <br>
                            <select class="form-control select2" name="nis_id" style="width: 100%;">
                                @foreach ($datapass as $user)
                                    <option value="{{ $user->nis_id }}">{{$user->name}} - [{{ $user->nis_id }}]</option>
                                @endforeach
                            </select>
                            @if($errors->has('nis_id'))
                                <div class="text-danger">
                                    <strong>{{ $errors->first('nis_id')}}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Password</label>
                            <input required type="password" class="form-control" name="password" value="">
                            @if($errors->has('password'))
                            <div class="text-danger">
                                {{ $errors->first('password')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Password</button>
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
