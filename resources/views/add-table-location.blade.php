@extends('app')

@section('title', 'Add Location')

@section('content')
    <div class="container">
    <div class="form-container">
        <h1 class="form-title">Add Location</h1>
        <p class="form-description">Tambahkan Data!</p>
        <form action="/location-facilities/add-table" method="post">
            @csrf
            <div class="form-group">
                <label for="nomor_urut_meja">Nomor Meja</label>
                <input type="text" id="nomor_urut_meja" name="nomor_urut_meja" required>
            </div>

            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="Terisi">Terisi</option>
                    <option value="Kosong">Kosong</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

@endsection