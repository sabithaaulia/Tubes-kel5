

@extends('layout.template')
@extends('layout.add')
<!-- START FORM -->
@section('konten') 

<form action='{{ url('mahasiswa/'.$data->nama_pelapor) }}' method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('mahasiswa') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="nama_pelapor" class="col-sm-2 col-form-label">Nama Pelapor</label>
        <div class="col-sm-10">
            {{ $data->nama_pelapor }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_tenant" class="col-sm-2 col-form-label">Nama Tenant</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama_tenant' value="{{ $data->nama_tenant }}" id="nama_tenant">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="deskripsi_laporan" class="col-sm-2 col-form-label">Deskripsi Laporan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='deskripsi_laporan' value="{{ $data->deskripsi_laporan }}" id="deskripsi_laporan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="deskripsi_laporan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection