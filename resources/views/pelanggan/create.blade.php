@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA PELANGGAN</h3>
        <form action="{{ url('/pelanggan')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">USER</label>
                <select name="id_user" id="" class="form-control">
                    @foreach( $dataUser as $row)
                    <option value="{{ $row->id }}">{{ $row->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
            <div class="mb-3">
                <label for="">Hp</label>
                <input type="text" name="hp" class="form-control" placeholder="Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection