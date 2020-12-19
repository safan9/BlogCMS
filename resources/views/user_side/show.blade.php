@extends('user_side.base')

@section('content')

	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-3 bread">Detailed Blog</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{url('/blog')}}">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Detailed Blog <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-degree-bg">
		<div class="container">
			<div class="row">
				<h2 class="mb-3">{{ $blog->title }}</h2>
				<div class="col-lg-10 ftco-animate">
					<p class="mb-5">
						<img src="/images/blog_images/{{ $blog->image }}" alt="" class="img-fluid">
					</p>
					<p>
						{!! $blog->description !!}
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection