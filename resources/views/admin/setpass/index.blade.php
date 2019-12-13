@extends('admin.layouts.sbadmin')

@section('title')
    <title>Buat Password Login</title>
@endsection

@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Password Siswa<span class="badge badge-pill-sm badge-success"> {{ $count }} </span>
                </h1>
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
            <table class="table-sm table-bordered table-striped col-lg-12 mb-2">
                    <thead class=" thead-dark">
                        <tr>
                            <th class="text-center">NIS ID</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datapass as $setpass)
                        <tr>
                            <th class=" text-center">{{ $setpass->nis_id}}</th>
                            <th>{{ $setpass->name}}</th>
                            <th class=" text-center">{{ $setpass->kelas}}</th>
                            <th>
                                <a href="/admin/setpass/edit/{{ $setpass->id}}" class="btn-sm btn-success ml-2">Edit</a>
                                <a href="/admin/setpass/delete/{{ $setpass->id}}" onclick="return confirm('Apakah anda ingin menghapus data ini?');" class="btn-sm btn-danger">Hapus</a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-left">{{ $datapass->links() }}</div>
                <br>

                <input class="form-control col-lg-3 mb-1" type="password" name="password" id="password" placeholder="Masukan Kode Rahasia">
                <button class="btn-danger" type="button" id="reset">HAPUS SEMUA PASSWORD</button>
                {{-- <a href="{{ route('admin.resetpass')}}" class="btn btn-danger">RESET SEMUA PASSWORD</a> --}}
            </div>
@endsection

@section('isi_script')
<script>
document.getElementById("reset").addEventListener("click",function(evt){
    var codeEntered = document.getElementById("password").value.trim();
    // For each different code, use location.href to redirect the user
    switch (codeEntered) {
        case "1324":
            location.href = "{{ route('admin.resetpass')}}";
            break;
        default:
            alert("Kode Hapus Salah");
    }
});
</script>

@endsection
