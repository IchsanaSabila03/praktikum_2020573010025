@extends('layouts.default')

@section('content')

<div class="panel-header bg-dark">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Daftar Artikel</div>
                        <a href="/artikel/create" class="btn btn-primary m-2 p-2">Tambah Artikel</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Nama Artikel</th>
                                <th>Slug</th>
                                <th>Deksripsi</th>
                                <th>Kategori ID</th>
                                <th>Gambar Artikel</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikel as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->judul }}</td>
                                <td>{{ $row->nama_artikel }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>{{ $row->deksripsi }}</td>
                                <td>{{ $row->kategori->nama_kategori }}</td>
                                <td><img src="{{ asset('uploads/'.$row->gambar_artikel) }}"width="200"></td>
                                <td>
                                    <a href="/artikel/{{$row->id}}/edit" class="badge bg-warning">Edit</a>
                                    <a href="/artikel/{{$row->id}}" class="badge badge-success">Show</a>
                                    <form action="/artikel/{{$row->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Data masih kosong</td>
                            </tr>
                                
                            @endforelse
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
