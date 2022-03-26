{{-- @include('layout.header',['title' => 'Data Dosen']) --}}
{{-- @include('layout.header',['title' => 'Data Dosen', 'dataA' => 'NilaiA','datab'=>'NilaiB']) --}}
{{-- @include('layout.footer') --}}
@extends('layout.master')
@section('title','Gallery')
@section('menuGallery','active')
@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1 class="mb-3">Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://media.istockphoto.com/photos/developer-programming-and-coding-technology-website-design-safety-of-picture-id1080189078" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt4">
            <img src="https://media.istockphoto.com/photos/man-viewing-graphics-with-a-leptop-from-the-bed-picture-id1296116243" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@endsection
