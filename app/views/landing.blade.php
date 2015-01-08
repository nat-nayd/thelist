<!doctype html>
<html lang="en">
<head>
	<meta characters="UTF-8">
	<title>The List</title>
	@section('head')
		{{ HTML::script('bower/jquery/dist/jquery.js') }}
		{{ HTML::script('bower/bootstrap/dist/js/bootstrap.js') }}
		{{ HTML::style('bower/bootstrap/dist/css/bootstrap.css') }}
		{{ HTML::style('css/landing.css') }}
	@show
</head>

<body>
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">
				
				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">The List</h3>

						<ul class="nav masthead-nav">
							<li class="active"><a href="https://github.com/nat-nayd" target="_blank">@Github</a></li>
							{{--
								<li><a href="javascript:void();">Features</a></li>
							--}}
							<li>{{ HTML::link('login', 'Login') }}</li>
						</ul>
					</div>
				</div>

				<div class="inner cover">
					@if(isset($index))
					{{--
						<h1 class="cover-heading">Full screen background cover page.</h1>

						<p class="lead">Cover is a on-page template for building simple and beautiful home pages. Download, edit the text and add your own fullscreen background color and photo to make it your own.</p>
					
						<p class="lead">{{ HTML::link('#', 'The List', array('class' => 'btn btn-lg btn-info')) }}</p>
					--}}
					@else
						@yield('content')
					@endif
				</div>

				<div class="mastfoot">
					<div class="inner">
						<p><a href="https://github.com/twbs/bootlint" target="_blank"><small>Checked with Bootlint</small></a></p>
						<p><small>© 2014 Nat Naydenova</small></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>