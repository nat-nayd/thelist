@extends('landing')

@section('content')

<div class="col-md-offset-4 col-md-5 row">
	<div class="form-login">
		<legend>Login</legend>
		{{ Form::open(array('url' => 'login')) }}

		@if($errors->any())
			<div class="has-errors">
				{{ implode('', $errors->all('<p class="error">:message</p>')) }}
			</div>
		@endif

		{{ Form::text('username', '', array('placeholder' => 'Username', 'class' => 'form-control input-sm chat-input')) }}<br />
		{{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control input-sm chat-input')) }}<br />

		<div class="wrapper">
			<span class="group-btn">
				{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
			</span>
		</div>

		{{ Form::close() }}
	</div>
</div>

@stop