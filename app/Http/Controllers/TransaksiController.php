<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Transaksi::all();
        return view('transaksi.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dataPelanggan = Pelanggan::all();
        $dataProduk = Produk::all();
        return view('transaksi.create', compact(['dataPelanggan', 'dataProduk']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'id_produk' => $request->id_produk,
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'tunai' => $request->tunai
        ];

        // rumus total harga
        $dataProduk = Produk::where('id', $request->id_produk)->first();
        $total_harga = $dataProduk->harga * $request->jumlah;

        // rumus kembalian
        $kembalian = $request->tunai - $total_harga;
        
        $data['total_harga'] = $total_harga;
        $data['kembalian'] = $kembalian;

        Transaksi::create($data);

        return redirect('/transaksi')->with('success','Data berhasil ditambahkan');
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
        $dataTransaksi = Transaksi::findOrFail($id);
        $dataPelanggan = Pelanggan::all();
        $dataProduk = Produk::all();
        return view('transaksi.edit', compact(['dataTransaksi', 'dataPelanggan', 'dataProduk']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'id_produk' => $request->id_produk,
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah,
            'tunai' => $request->tunai
        ];

        // rumus total harga
        $dataProduk = Produk::where('id', $request->id_produk)->first();
        $total_harga = $dataProduk->harga * $request->jumlah;

        // rumus kembalian
        $kembalian = $request->tunai - $total_harga;
        
        $data['total_harga'] = $total_harga;
        $data['kembalian'] = $kembalian;

        $row = Transaksi::findOrFail($id);
        $row->update($data);
        return redirect('transaksi')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Transaksi::findOrFail($id);
        $row->delete();

        return redirect('Transaksi')->with('success', 'Data berhasil dihapus');
    }
}
