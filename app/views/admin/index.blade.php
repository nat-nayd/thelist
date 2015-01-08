@extends('master')

@section('content')

<section id="carousel">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
					<div class="active item">
						<blockquote>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, vertatis, nulla eum laudantium tempore optio dolorqmque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
						</blockquote>
						<div class="profile-circle"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@stop