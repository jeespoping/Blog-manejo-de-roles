@extends('admin.layout')

@section('header')
<h1>
	POSTS
	<small>Listado</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li class="active">Posts</li>
</ol>
@stop

@section('content')
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">Listado de publicaciones</h3>
		<button class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-plus"></i>  Crear publicación
		</button>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="posts-table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Título</th>
					<th>Extracto</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>{{ $post->id }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->excerpt }}</td>
						<td>
							<a href="#" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
							<a href="#" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
							<a href="#" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
			
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
@stop

@push('styles')
	<link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css"> 
@endpush

@push('scripts')
	<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
	<script>
		$(function () {
			$("#posts-table").DataTable();
		});
	</script>
@endpush


