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
					<div class="card-head-row" style="width: 100%">
						<div class="card-title text-center w-100"><h1>{{ $artikel->judul }}</h1></div>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<div  class="text-center"><img src="{{ asset('uploads/'.$artikel->gambar_artikel) }}" width=800px></div>
						<br><div class="card-documentation text-center w-100">{{ $artikel->deksripsi }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
