@extends('Layout.layout')

@section('content')

@include('Component.navbar')
<div class ="container">

<h1> Data Kategori </h1>
<td><a href="dashboard-tambah-kategori" class="btn btn-primary">Tambah Data Kategori</a></td>

<table class = "table">
    <thead>
        <tr>
            <th scope = "col">No</th>
            <th scope = "col">Kode Kategori</th>
            <th scope = "col">Deskripsi</th>
            <th scope = "col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategori as $ktg)
        <tr>
            <td></td>
            <td>{{$ktg->id_kategori}}</td>
            <td>{{$ktg->deskripsi}}</td>
            <td><a href="{{'print-produk'}}" class="btn btn-warning">Print</a></td>
        </tr>
        @endforeach
</tbody>
</table>
</div>

@endsection