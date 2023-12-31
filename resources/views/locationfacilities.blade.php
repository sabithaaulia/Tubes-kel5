@extends('app')

@section('title', 'Location & Facilities')

@section('content')

<div class="content mt-5">
    <div class="px-5">

        <a type="button" href="{{url('/location-facilities/add-table')}}" class="btn btn-success mb-2">Tambah Meja</a>

        <div class="row row-cols-1">
            @if(Session::has('messageAddTable'))
                <div class="alert alert-primary alert-lg"> {{ Session::get('messageAddTable') }}</div>
            @endif
            @if(Session::has('dataTableUpdate'))
                <div class="alert alert-primary alert-lg"> {{ Session::get('dataTableUpdate') }}</div>
            @endif
            @if(Session::has('MessageDeleteTable'))
                <div class="alert alert-danger alert-lg"> {{ Session::get('MessageDeleteTable') }}</div>
            @endif
            <div class="col">
                <table class="table table-hover table-bordered table-white align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nomor Urut Meja</th>
                            <th>Nama Pemilik</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataLocation as $location)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $location->nomor_urut_meja }}</td>
                            <td>{{ $location->nama_pemilik }}</td>
                            <td>{{ $location->status }}</td>
                            <td>
                                <a href="{{url('/location-facilities/edit-table/'.$location->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('table.delete', ['id' => $location->id])}}" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
