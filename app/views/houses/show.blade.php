@extends('master')

@section('content')

	<div class="page-header">
		<h1>Houses Preview</h1>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<blockquote>
		<p>{{ $data->motto }}</p>
		<footer>House of <cite title="{{ $data->name }}">{{ $data->name }}</cite></footer>
	</blockquote>

@stop