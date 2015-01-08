@extends('master')

@section('content')

	<div class="page-header">
		<h1>Preview {{ $data->name }}</h1>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<div class="jumbotron text-center">
		<h2>{{ $data->name }}</h2>
		<p><strong>House:</strong> {{ $house->name }}</p>
	</div>

@stop