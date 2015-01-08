@extends('master')

@section('content')

	<div class="page-header">
		<h1>Characters: <small>Heads will be rolling</small>
			{{ HTML::link('characters/create', 'Create', array('class' => 'btn btn-primary pull-right')) }}
		</h1>
	</div>

	{{-- Show any message, when redirecting from create/edit/etc. --}}
	@if(Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>House</td>
				<td>Actions</td>
			</tr>			
		</thead>
		<tbody>
		@foreach($data as $obj)
			<tr>
				<td>{{ $obj->id }}</td>
				<td>{{ $obj->name }}</td>
				<td>{{ $houses->find($obj->house_id)->name }}</td>
				<td>
					{{-- handles DELETE request, explained in controller --}}
					{{ Form::open(array( 'url' => 'characters/' . $obj->id, 'class' => 'pull-right')) }}
						{{ Form::hidden('_method', 'DELETE') }}
						{{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
					{{ Form::close() }}

					<a class="btn btn-small btn-success" href="{{ URL::to('characters/' . $obj->id) }}">Show</a>
					<a class="btn btn-small btn-info" href="{{ URL::to('characters/' . $obj->id . '/edit') }}">Edit</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	
@stop