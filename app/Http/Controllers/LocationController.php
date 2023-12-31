<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function showLocation()
    {
        $location = Location::all();
        return view('locationfacilities', ['dataLocation' => $location]);
    }

    public function addTable()
    {
        return view('add-table-location');
    }

    public function submitAddTable(Request $request)
    {
        $request->validate([
            'nomor_urut_meja' => 'required',
            'nama_pemilik' => 'required',
            'status' => 'required',
        ]);

        $addTableSubmission = Location::create([
            'nomor_urut_meja'=> $request->input('nomor_urut_meja'),
            'nama_pemilik' => $request->input('nama_pemilik'),
            'status'=> $request->input('status'),
        ]);

        return redirect('location-facilities')->with('messageAddTable', 'Location have been added');
    }

    public function editTable($id)
    {
        $showDataLocation = Location::find($id);
        return view('edit-table-location', ['showDataLocation' => $showDataLocation]);
    }

    public function submitEditTable(Request $request, $id)
    {
        $ediTable = Location::find($id);
        $request->validate([
            'nomor_urut_meja' => 'required',
            'nama_pemilik' => 'required',
            'status' => 'required',
        ]);

        $ediTable->update([
            'nomor_urut_meja' => $request->nomor_urut_meja,
            'nama_pemilik' => $request->nama_pemilik,
            'status' => $request->status,
        ]);

        session()->flash('dataTableUpdate','Data Updated Succesfully');
        return redirect('location-facilities');
    }

    public function deleteTable($id)
    {
        $tableDelete = Location::find($id) ;

        $tableDelete->delete();
        session()->flash('MessageDeleteTable', 'Data Deleted Succesfully');
        return redirect('location-facilities');
    }
}
