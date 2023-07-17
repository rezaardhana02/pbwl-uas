<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::with(['user'])->get();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        $dataUser = Users::all();
        return view('pelanggan.create', compact('dataUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create(
            [
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'hp' => $request->hp
            ]
        );

        return redirect('pelanggan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $dataUser = Users::all();
        return view('pelanggan.edit', compact('row', 'dataUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->update(
            [
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'hp' => $request->hp
            ]
        );
        return redirect('pelanggan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::findOrFail($id);
        $row->delete();

        return redirect('pelanggan')->with('success', 'Data berhasil dihapus');
    }
}
