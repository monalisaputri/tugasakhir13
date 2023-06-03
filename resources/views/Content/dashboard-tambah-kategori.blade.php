@extends('Layout.layout')

@section('content')

@include('Component.navbar')
<div class="container">

    <h1>Tambah Data Kategori</h1>

    <form action="dashboard-tambah-kategori" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Id Kategori</label>
            <input type="text" class="form-control" placeholder="ID Kategori" name="id_kategori">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" class="form-control" placeholder ="Deskripsi" name="deskripsi">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection