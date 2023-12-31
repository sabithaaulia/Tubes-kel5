@extends('app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container">
    <div class="form-container">
        <h1 class="form-title">Edit Location</h1>
        <p class="form-description">Ubah data di bawah ini!</p>
        <form action="{{ route('table.update', ['id' => $showDataLocation->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomor_urut_meja">Nomor Meja</label>
                <input type="text" id="nomor_urut_meja" name="nomor_urut_meja" value="{{$showDataLocation->nomor_urut_meja}}" required>
            </div>

            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" value="{{$showDataLocation->nama_pemilik}}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" value="{{$showDataLocation->status}}">
                    <option value="Terisi">Terisi</option>
                    <option value="Kosong">Kosong</option>
                </select>
            </div>

            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</div>

@endsection
