@extends('layout.user')

@section('content')

@include('component.navUser')
<div class="container-fluid" style="background-image : url('/assets/sec-bg.jpg');">
    <div class="row">
        <div class="col-sm-10 col-md-7 col-lg-9 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h1 class="card-title text mb-8">Give your Comment</h1>
              <p class="card-title text mb-5"><i>on something amazing</i></p>
    <form action="post-register" method="POST">
        {{ csrf_field() }}
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors ->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif
        <div class="form-group">
            <label class="form-label" for="name">Nama User</label>
            <input type="text" id="nama" type="text" class="form-control" name="nama">
        </div>
        <br>
        <div class="form-group">
            <label class="form-label" for="name">Nama Karya</label>
            <input type="text" id="judul" type="text" class="form-control" name="judul">
        </div>
        <br>
        <div class="form-group">
            <label class="form-label" for="name">Komentar Anda</label>
            <textarea type="text" id="komentar" type="text" class="form-control" name="komentar" required autofocus></textarea>
        </div>
        <br>
        <button class="btn btn-primary" style="background-color: #000000"
            type="submit">Posting</button>
    </form>
</div>
</div>
</div>
</div>
</div>
@include('component.footer')

@endsection
