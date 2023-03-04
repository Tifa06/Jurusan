@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Jurusan</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="[[route('dashboard')]]">Dashboard</a></li>
					<li class="breadcrumb-item active">Jurusan</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}

		<div class="card">
			<div class="card-header">
				<a href="{{ route('createJurusan')}}" class="btn btn-primary" role="button">Tambah Jurusan</a>
			</div>
			<div class="card-body p-0">
				<table class="table table-hover mb-0">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Jurusan</th>
							<th>Deskripsi</th>
							<th>Aksi</th>	
						</tr>
					</thead>
					<tbody>
						@foreach ($jurusans as $jurusan)
						<tr>
							<td>{{ $loop->index + 1}} </td>
							<td>{{ $jurusan->nama}}</td>
							<td>{{ $jurusan->deskripsi}}</td>
							<td>
								<a href="{{route('editJurusan', ['id' => $jurusan->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
								<a href="{{route('deleteJurusan', ['id' => $jurusan->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection