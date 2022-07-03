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
						<div class="card-title">Tambah Artikel</div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
                        <form action="/artikel" method="POST" enctype="multipart/form-data">
                        @csrf
							<div class="mb-3">
								<label for="judul" class="form-label">Judul Artikel</label>
								<input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" value="{{ old('judul') }}" >
								@error('judul')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                            <div class="mb-3">
                                <label for="nama_artikel" class="form-label">Nama Artikel</label>
                                <input type="text" class="form-control @error('nama_artikel') is-invalid @enderror" id="nama_artikel" name="nama_artikel" value="{{ old('nama_artikel') }}" >
                                @error('nama_artikel')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
							<div class="mb-3">
                                <label for="slug" class="form-label">slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" >
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
							<div class="mb-3">
								<label for="deksripsi" class="form-label">Deskripsi</label>
								<input type="text" class="form-control @error('deksripsi') is-invalid @enderror" id="deksripsi" name="deksripsi" value="{{ old('deksripsi') }}" >
								@error('deksripsi')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                            <div class="mb-3">
								<label for="kategori_id" class="form-label">Kategori</label>
								<select type="int" class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id" name="kategori_id" value="{{ old('kategori_id') }}" >
								@foreach ($kategori as $row)
								<option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
								@endforeach
								</select>
								@error('kategori_id')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
							<div class="mb-3">
								<label for="gambar_artikel" class="form-label">Gambar Artikel</label>
								<input type="file" class="form-control @error('gambar_artikel') is-invalid @enderror" id="gambar_artikel" name="gambar_artikel" value="{{ old('gambar_artikel') }}" >
								<option value=""></option>
								@error('gambar_artikel')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							</div>
                            <button type="submit" class="btn btn-primary">Tambah Artikel</button>
							<button type="reset" class="btn btn-danger">Reset</button>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
