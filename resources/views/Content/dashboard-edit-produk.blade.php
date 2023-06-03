@extends('Layout.layout')

@section('content')

@include('Component.navbar')
<div class ="container">

    <h1> Data Produk </h1>

    <form action="{{ url('dashboard-produk', $produk->id)}}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label>Id Produk</label>
            <input type="text" class="form-control" placeholder="ID Produk" name="id_produk"
                   value="{{ $produk->id }}">
        </div>
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" placeholder="Nama Produk" name="nama"
                   value="{{ $produk->nama}}">
        </div>
        <div class="form-group">
            <label>Kategori Produk</label>
            <select class="form-select" name="id_kategori" id="id_kategori" required
                value="{{ $produk->kategori}}">
            @foreach($kategori as $ktg)
                <option value="{{$ktg->id_kategori}}">{{$ktg->id_kategori}} {{$ktg->deskripsi}}
                </option>
                {{-- <input type="text" class="form-control" placeholder="Kategori Produk" name="kategori"
                   value="{{ $produk->kategori}}"> --}}
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection

