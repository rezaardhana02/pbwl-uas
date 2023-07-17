@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>EDIT DATA Pelanggan</h3>
        <form action="{{ url('/pelanggan/' .$row->id)}}" method="post">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="">USER</label>
                <select name="id_user" id="" class="form-control">
                    @foreach( $dataUser as $rowUser)
                        @if($row->id_user == $rowUser->id)
                        <option value="{{ $rowUser->id }}" select>{{ $rowUser->nama }}</option>
                        @else
                        <option value="{{ $rowUser->id }}">{{ $rowUser->nama }}</option>
                        @endif
                    @endforeach
                </select>
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