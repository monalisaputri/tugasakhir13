<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous"> --}}
    <title>Print Kategori</title>
</head>
<body>
    <div class="container">
        <center><h1>DAFTAR KATEGORI TERSEDIA</h1></center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Kode Kategori</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody
                @foreach ($kategori as $ktg)
                <tr>
                    <td>{{ $ktg->id_kategori}}</td>
                    <td>{{ $ktg->deskripsi}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>