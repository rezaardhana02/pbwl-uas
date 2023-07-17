@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>TAMBAH DATA USERS</h3>
        <form action="{{ url('/users')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
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
                <label for="">Nomor Hp</label>
                <input type="text" name="hp" class="form-control" placeholder="Nomor Hp">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection