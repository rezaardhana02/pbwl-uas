@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA USERS</h3>
        <form action="{{ url('/users/' .$row->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="{{$row->email}}">
            </div>
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" value="{{$row->password}}">
            </div>
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{$row->alamat}}">
            </div>
            <div class="mb-3">
                <label for="">Nomor Hp</label>
                <input type="text" name="hp" class="form-control" value="{{$row->hp}}">
            </div> 
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection