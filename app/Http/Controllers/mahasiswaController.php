<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\user;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = mahasiswa::where('nama_laporan', 'like', "%$katakunci%")
                ->orWhere('nama_tenant', 'like', "%$katakunci%")
                ->orWhere('deskripsi_laporan', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = mahasiswa::orderBy('nama_pelapor', 'desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_pelapor', $request->nama_pelapor);
        Session::flash('nama_tenant', $request->nama_tenant);
        Session::flash('deskripsi_laporan', $request->deskripsi_laporan);

        $request->validate([

            'nama_tenant' => 'required',
            'deskripsi_laporan' => 'required',
        ], [
            'nama_pelapor.required' => 'Nama Pelapor wajib diisi',
            'nama_pelapor.required' => 'Nama Pelapor wajib diisi',

            'deskripsi_laporan.required' => 'Deskripsi wajib diisi',
        ]);
        $data = [
            'nama_pelapor' => $request->nama_pelapor,
            'nama_tenant' => $request->nama_tenant,
            'deskripsi_laporan' => $request->deskripsi_laporan,
        ];
        mahasiswa::create($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = mahasiswa::where('nama_pelapor', $id)->first();
        return view('mahasiswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = [
            'nama_tenant' => $request->nama_tenant,
            'deskripsi_laporan' => $request->deskripsi_laporan,
        ];
        mahasiswa::where('nama_pelapor', $id)->update($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mahasiswa::where('nama_pelapor', $id)->delete();
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan delete data');
    }
}
