@extends('Layout.layout')

@section('content')
<div class="container mt-5">
    <h3>login</h3>
    <form action="post-login" method="POST">
        {{ csrf_field() }}
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors ->all() as $error)
            {{ $error }} <br />
            @endforeach
        </div>
        @endif
        <div>
            <label for="username">Email</label>
            <input id="email" type="email" class="form-control" name="email" required autofocus>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <button type = "submit" name= "login" class="btn btn-primary btn-block btn-flat">Sign In</button>
    </form>
    <p>Belum mempunyai akun? <a href="register">Daftar</a></p>
</div>

@endsection