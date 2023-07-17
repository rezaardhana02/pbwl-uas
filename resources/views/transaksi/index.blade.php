@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DATA TRANSAKSI</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('transaksi/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>TANGGAL</td>
                <td>PRODUK</td>
                <td>NAMA PELANGGAN</td>
                <td>HARGA</td>
                <td>JUMLAH</td>
                <td>TOTAL HARGA</td>
                <td>TUNAI</td>
                <td>KEMBALIAN</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id}}</td>
                <td>{{ $row->tanggal}}</td>
                <td>{{ $row->produk->nama}}</td>
                <td>{{ $row->pelanggan->nama}}</td>
                <td>{{ $row->produk->harga}}</td>
                <td>{{ $row->jumlah}}</td>
                <td>{{ $row->total_harga}}</td>
                <td>{{ $row->tunai}}</td>
                <td>{{ $row->kembalian}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('transaksi/' .$row->id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('transaksi/' .$row->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah yakin ingin dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection