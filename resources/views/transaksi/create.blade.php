@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA TRANSAKSI</h3>
        <form action="{{ url('/transaksi')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="">PRODUK</label>
                <select name="id_produk" id="" class="form-control">
                    @foreach( $dataProduk as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">PELANGGAN</label>
                <select name="id_pelanggan" id="" class="form-control">
                    @foreach( $dataPelanggan as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">TANGGAL</label>
                <input type="text" name="tanggal" class="form-control" value="{{ now() }}" readonly>
            </div>
            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="number" min="0" name="jumlah" class="form-control" placeholder="Jumlah" required>
            </div>
            <div class="mb-3">
                <label for="">TUNAI</label>
                <input type="number" min="0" name="tunai" class="form-control" placeholder="Tunai" required>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection