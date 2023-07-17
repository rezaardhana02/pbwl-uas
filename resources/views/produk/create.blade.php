@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PRODUK</h3>
        <form action="{{ url('/produk')}}" method="post">
            @csrf
            
            <div class="mb-3">
                <label for="">NAMA PRODUK</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required>
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="number" min="0" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection