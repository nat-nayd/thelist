@extends('master')

@section('content')

	<div class="page-header">
		<h1>Houses: Create new</h1>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	{{-- List validation errors if any --}}
	{{ HTML::ul($errors->all(), array('class' => 'has_errors')) }}

	{{ Form::open(array('url' => 'houses')) }}

		<div class="form-group">
			{{ Form::label('name', 'Name') }}
			{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('motto', 'Motto') }}
			{{ Form::text('motto', Input::old('motto'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop