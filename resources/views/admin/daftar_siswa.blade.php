@extends('admin.layouts.sbadmin')

@section('title')
    <title>Daftar Siswa :: Admin</title>
@endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                    <div class="col-lg col-sm-1">
                    @if(session()->has('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session()->get('message') }}
                    </div>
                    @endif
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
                <table class="table table-stripped table-bordered mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Siswa</th>
                            <th>NIS </th>
                            <th>Kelas </th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($siswa as $s)
                        <tr>
                            <th>{{ $i++}} </th>
                            <th>{{ $s->name}}</th>
                            <th>{{ $s->nis_id}}</th>
                            <th>{{ $s->kelas}}</th>
                            <th>
                                <form class="d-inline-block" action="{{ route('admin.daftarsiswa')}}/{{$s->id}} " method="get">
                                    <button class="btn-sm btn-info" type="submit">Detail</button>
                                </form>

                                <form class="d-inline-block" action="{{ route('admin.hapussiswa', $s->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-sm btn-danger" type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</button>
                                </form>
                                {{-- <a href="{{ route('jurnal.destroy', $jurnal->id) }}" class="btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?');">Hapus</a> --}}
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr style="border:2px solid black">
                {{ $siswa->links() }}


                {{-- End Content --}}
            </div>
@endsection
