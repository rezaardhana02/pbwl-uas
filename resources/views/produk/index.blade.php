@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>DAFTAR PRODUK</h3>
        @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session ('success')}}
        </div>
        @endif
        <a class="btn btn-primary btn-sm float-end" href="{{ url('produk/create')}}">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <td>NO</td>
                <td>NAMA</td>
                <td>HARGA</td>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            @foreach ($rows as $row)
            <tr>
                <td>{{ $row->id}}</td>
                <td>{{ $row->nama}}</td>
                <td>{{ $row->harga}}</td>
                <td><a class="btn btn-info btn-sm float" href="{{url('produk/' .$row->id. '/edit')}}">Edit</a></td>
                <td>
                    <form action="{{url('produk/' .$row->id)}}" method="post">
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