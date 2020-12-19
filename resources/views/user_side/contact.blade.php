@extends('user_side.base')

@section('content')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
<div class="col-md-9 ftco-animate pb-5 text-center">
<h1 class="mb-3 bread">Contact us</h1>
<p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 class="h3">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3">
<p><span>Address:</span> 1st Floor, NEC, Bharuch</p>
</div>
<div class="col-md-3">
<p><span>Phone:</span> <a href="tel://1234567920">02642 221325</a></p>
</div>
<div class="col-md-3">
<p><span>Email:</span> <a href="https://colorlib.com/cdn-cgi/l/email-protection#8ae3e4ece5caf3e5fff8f9e3feefa4e9e5e7"><span class="__cf_email__" data-cfemail="a2cbccc4cde2dbcdd7d0d1cbd6c78cc1cdcf">[email&#160;protected]</span></a></p>
</div>
<div class="col-md-3">
<p><span>Website</span> <a href="#">yoursite.com</a></p>
</div>
</div>
<div class="row block-9 no-gutters">
<div class="col-lg-6 order-md-last d-flex">
<form action="#" class="bg-light p-4 p-md-5 contact-form">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Email">
</div>
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
</div>
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
</div>
</form>
</div>
<div class="col-lg-6 d-flex">
<div id="map" class="bg-white"></div>
</div>
</div>
</div>
</section>

@endsection