@extends('master')

@section('content')

	<div class="page-header">
		<h1>Edit House {{ $data->name }} </h1>
	</div>

	{{-- List validation errors if any --}}
	{{ HTML::ul($errors->all(), array('class' => 'has_errors')) }}

	{{ Form::model($data, array('route' => array('houses.update', $data->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('motto', 'Motto') }}
			{{ Form::text('motto', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop