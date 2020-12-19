@extends('user_side.base')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread">About</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
<div class="container">
<div class="row d-flex">
<div class="col-md-6 d-flex">
<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(images/about.jpg);">
<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
<span class="icon-play"></span>
</a>
</div>
</div>
<div class="col-md-6 pl-md-5 py-md-5">
<div class="row justify-content-start pt-3 pb-3">
<div class="col-md-12 heading-section ftco-animate">
<span class="subheading">Welcome to Blog CMS</span>
<h2 class="mb-4">We give you the best articles you want.</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
<div class="tabulation-2 mt-4">
<ul class="nav nav-pills nav-fill d-md-flex d-block">
<li class="nav-item mb-md-0 mb-2">
<a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
</li>
<li class="nav-item px-lg-2 mb-md-0 mb-2">
<a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
</li>
<li class="nav-item">
<a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
</li>
</ul>
<div class="tab-content bg-light rounded mt-2">
<div class="tab-pane container p-0 active" id="home1">
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
</div>
<div class="tab-pane container p-0 fade" id="home2">
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
</div>
<div class="tab-pane container p-0 fade" id="home3">
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="ftco-section testimony-section">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-7 text-center heading-section ftco-animate">
<span class="subheading">Our Team</span>
<h2 class="mb-4">Meet Our Team Members</h2>
</div>
</div>
<div class="row ftco-animate">
<div class="col-md-12">
<div class="carousel-testimony owl-carousel ftco-owl">
<div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="mb-4">Web Developer Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Bapu Safwan</p>
<span class="position">Web Developer</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="mb-4">Web Designer Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Sagir Shehnaj</p>
<span class="position">Web Designer</span>
</div>
</div>
</div>
</div>
</div>
<div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="mb-4">Tester Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
<div class="pl-3">
<p class="name">Parmar Harendrakumar</p>
<span class="position">Software Tester</span>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="item">
<div class="testimony-wrap py-4">
<div class="text">
<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
<div class="d-flex align-items-center">
<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
<div class="pl-3">
<p class="name">Roger Scott</p>
<span class="position">Marketing Manager</span>
</div>
</div>
</div>
</div>
</div> -->
</div>
</div>
</div>
</div>
</section>

@endsection