<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    {{-- <h1>Data Mahasiswa</h1> --}}
    <div class="container text-center mt-3 pt-3 bg-white">
    <h1 class= "bg-dark px-3 py-1 text-white d-inline-block">{{ $nama }}</h1>
        <br>
        {{--
        @foreach ($nilai as $val)
        @if ($val < 50)
        @break
        @endif 
        <div class="alert alert-succes d-inline-block">
        {{ $val }}
        </div>
        @endforeach
        --}}
    </div>
</body>
</html>
