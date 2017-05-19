@extends('admin.layout')

@section('header')
<h1>
	POSTS
	<small>Crear publicación</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
	<li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Posts</a></li>
	<li class="active">Crear</li>
</ol>
@stop

@section('content')
<div class="row">
	<form method="POST" action="{{ route('admin.posts.store') }}">
	{{ csrf_field() }}
	<div class="col-md-8">
		<div class="box box-primary">
				<div class="box-body">
					<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
						<label>Título de la publicación</label>
						<input name="title" 
							class="form-control"
							value="{{ old('title') }}" 
							placeholder="Ingresa aquí el título de la publicación">
						{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
						
					</div>
					<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
						<label>Contenido publicación</label>
						<textarea rows="10" name="body" id="editor" class="form-control" placeholder="Ingresa el contendido completo de la publicación">{{ old('body') }}</textarea>
						{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
					</div>
				</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="box box-primary">
			<div class="box-body">
				<div class="form-group">
					<label>Fecha de publicación:</label>
					<div class="input-group date">
						<div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						</div>
						<input name="published_at" 
							class="form-control pull-right" 
							value="{{ old('published_at') }}" 
							type="text" 
							id="datepicker">
					</div>
				</div>
				<div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
					<label>Categorías</label>
					<select name="category" class="form-control">
						<option value="">Seleciona una categoría</option>
						@foreach ($categories as $category)
							<option value="{{ $category->id }}"
								{{ old('category') == $category->id ? 'selected' : '' }}
							>{{ $category->name }}</option>
						@endforeach
					</select>
					{!! $errors->first('category', '<span class="help-block">:message</span>') !!}	
				</div>
				<div class="form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
					<label>Etiquetas</label>
					<select name="tags[]" class="form-control select2" 
							multiple="multiple" 
							data-placeholder="Selecciona una o más etiquetas" style="width: 100%;">
	                	@foreach ($tags as $tag)
	                		<option {{ collect(old('tags'))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->name }}</option>
	                	@endforeach
	                </select>
	                {!! $errors->first('tags', '<span class="help-block">:message</span>') !!}
				</div>
				<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
					<label>Extracto publicación</label>
					<textarea name="excerpt" 
						class="form-control" 
						placeholder="Ingresa un extracto de la publicación">{{ old('excerpt') }}</textarea>
					{!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}	
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Guardar Publicación</button>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
@stop

@push('styles')
	<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
	<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
@endpush

@push('scripts')
	<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
	<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
	<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script>
	    $('#datepicker').datepicker({
	      autoclose: true
	    });
	    $('.select2').select2();
	    CKEDITOR.replace('editor');

	</script>
@endpush







