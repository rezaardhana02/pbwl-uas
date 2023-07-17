@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA PRODUK</h3>
        <form action="{{ url('/produk/' .$row->id)}}" method="post">
            @method('PATCH')
            @csrf
            
            <div class="mb-3">
                <label for="">NAMA</label>
                <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
            </div>
            <div class="mb-3">
                <label for="">HARGA</label>
                <input type="number" min="0" name="harga" class="form-control" value="{{$row->harga}}">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
@endsection