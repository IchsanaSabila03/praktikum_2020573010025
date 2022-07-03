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
						<div class="card-title">Daftar Kategori</div>
                        <a href="/kategori/create" class="btn btn-primary m-2 p-2">Tambah Kategori</a>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
					<table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama kategori</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    <a href="/kategori/{{$row->id}}/edit" class="badge bg-warning">Edit</a>
                                    <form action="/kategori/{{$row->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                        <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
