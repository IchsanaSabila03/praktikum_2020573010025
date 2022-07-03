<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
        <div class="container text-center p-4">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
        <div class="m-auto">
        <ol class="list-group">
        @forelse($mahasiswa as $mahasiswa)
        <li class="list-group-item">
        {{$mahasiswa->nama}}({{ $mahasiswa->nim }}),
        Tanggal lahir: {{ $mahasiswa->nim }},
        IPK: {{ $mahasiswa->ipk }}
        </li>
        @empty
        <div class="alert alert-dark d-inline-block">Tidak Ada Dta .....</div>
        @endforelse
        </ol>
        </div>
        </div>
        </div>
</body>
</html>













{{-- @include('layout.header',['title' => 'Data Dosen']) --}}
{{-- @include('layout.header',['title' => 'Data Dosen', 'dataA' => 'NilaiA','datab'=>'NilaiB']) --}}
{{-- @include('layout.footer') --}}
{{-- @extends('layout.master')
@section('title','Data Mahasiswa')
@section('menuMahasiswa','active')
@section('content')
@parent 
    <div class="container text-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-6 m-auto">
                <ol class="list-group">
                    @forelse($mahasiswa as $val)
                    <li class="list-group-item">{{$val}}</li>
                    @empty
                    <div class="alert alert-dark d-inline-block">Tidak Ada Dta .....</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
    @endsection --}}
    {{-- <p>Sebuah paragraf</p> --}}