@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA TRANSAKSI</h3>
        <form action="{{ url('/transaksi/' .$dataTransaksi->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">PRODUK</label>
                <select name="id_produk" id="" class="form-control">
                    @foreach( $dataProduk as $row)
                        @if($dataTransaksi->id_produk == $row->id)
                        <option value="{{ $row->id }}" selected>{{ $row->nama }} - {{ $row->harga }}</option>
                        @else
                        <option value="{{ $row->id }}">{{ $row->nama }} - {{ $row->harga }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">PELANGGAN</label>
                <select name="id_pelanggan" id="" class="form-control">
                    @foreach( $dataPelanggan as $row)
                    @if($dataTransaksi->id_pelanggan == $row->id)
                        <option value="{{ $row->id }}" selected>{{ $row->nama }}</option>
                        @else
                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">TANGGAL</label>
                <input type="text" name="tanggal" class="form-control" value="{{ $dataTransaksi->tanggal }}" readonly>
            </div>
            <div class="mb-3">
                <label for="">JUMLAH</label>
                <input type="number" min="0" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $dataTransaksi->jumlah }}" required>
            </div>
            <div class="mb-3">
                <label for="">TUNAI</label>
                <input type="number" min="0" name="tunai" class="form-control" placeholder="Tunai" value="{{ $dataTransaksi->tunai }}" required>
            </div>
            
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection