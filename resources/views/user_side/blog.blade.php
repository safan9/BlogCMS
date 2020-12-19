@extends('user_side.base')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
			<div class="col-md-12 ftco-animate">
				<h2 class="subheading">Hello! Welcome to</h2>
				<h1 class="mb-4 mb-md-0">Readit blog</h1>
				<div class="row">
					<div class="col-md-7">
						<div class="text">
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
							<div class="mouse">
								<a href="#" class="mouse-icon">
								<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row d-flex">
			@foreach($blogs as $blog)
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="{{ url('/blog/'.$blog->id) }}" class="block-20" 
							style="background-image: url('images/blog_images/{{ $blog->image }}'); 
									background-size: cover;">
						</a>
						<div class="text p-4 float-right d-block">
							<div class="topper d-flex align-items-center">
								<div class="one py-2 pl-3 pr-1 align-self-stretch">
									<span class="day">
										{{ $blog->created_at->format('d') }}
									</span>
								</div>
								<div class="two pl-0 pr-3 py-2 align-self-stretch">
									<span class="yr">
										{{ $blog->created_at->format('Y') }}
									</span>
									<span class="mos">
										{{ $blog->created_at->format('M') }}
									</span>
								</div>
							</div>
							<h3 class="heading mb-3">
								<a href="{{ url('/blog/'.$blog->id) }}">
									{{ $blog->title }}
								</a>
							</h3>
							<p>
								{{ substr(strip_tags($blog->description), 0, 100) }}{{ strlen(strip_tags($blog->description)) > 300 ? "..." : "." }}
							</p>
							<p><a href="{{ url('/blog/'.$blog->id) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
						</div>
					</div>
				</div>
			@endforeach
		</div>

	</div>
</div>


	<div class="row mt-5">
		<div class="col text-center">
			<div class="block-27">
				{{ $blogs->links('pagination::bootstrap-4') }}
			</div>
		</div>
	</div>
	</div>
</section>

@endsection