<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The List: Admin Panel</title>
	@section('head')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
		{{ HTML::script('bower/jquery/dist/jquery.js') }}
		{{ HTML::script('bower/bootstrap/dist/js/bootstrap.js') }}
		{{ HTML::style('bower/bootstrap/dist/css/bootstrap.css') }}
		{{ HTML::style('css/master.css') }}
	@show
</head>

<body>
	<div class="container">

		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					{{ HTML::link('admin', 'The List', array('class' => 'navbar-brand')) }}
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="{{ Request::is('characters') || Request::is('characters/*') ? 'active' : '' }}">
							{{ HTML::link('characters', 'Heads will be rollin\'') }}
						</li>
						<li class="{{ Request::is('houses') || Request::is('houses/*') ? 'active' : '' }}">
							{{ HTML::link('houses', 'Houses') }}
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Hello, {{ Auth::user()->username }}</a></li>
						<li class="divider"></li>
						<li>{{ HTML::link('logout', 'Logout') }}</li>
					</ul>
				</div>
			</div>
		</nav>

		@yield('content')

		<div class="row-fluid">
			<div class="text-center">
				<p><small>© {{ date('Y') }} Nat Naydenova ~ <a href="https://github.com/nat-nayd" target="_blank">GitHub</a></small></p>
			</div>
		</div>
	</div>
</body>
</html>