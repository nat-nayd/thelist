@extends('master')

@section('content')

	<div class="page-header">
		<h1>Characters: {{ $data->name }}</h1>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	{{-- List validation errors if any --}}
	{{ HTML::ul($errors->all(), array('class' => 'has_errors')) }}

	{{ Form::model($data, array('route' => array('characters.update', $data->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('house_id', 'House') }}
			{{ Form::select('house_id', $houses, Input::old('house_id'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop