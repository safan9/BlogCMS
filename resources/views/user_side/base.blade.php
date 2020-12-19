<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog CMS - Free Blogging</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="/">Blog<i>CMS</i>.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">

    <li class="nav-item"><a href="{{url('/articles')}}" class="nav-link">ADMIN</a></li>
    <li class="nav-item"><a href="{{url('/')}}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{url('/blog')}}" class="nav-link">Blog</a></li>
    <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">Team</a></li>
    <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
    </ul>
    </div>
    </div>
    </nav>

    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
    <div class="row mb-5">
    <div class="col-md">
    <div class="ftco-footer-widget mb-4">
    <h2 class="logo"><a href="{{url('/')}}">Blog<span>CMS</span>.</a></h2>
    <p>Blog CMS Made with &#9829; by Bapu Safwan, <br/>
        Sagir Shehbaj and <br/> Parmar Harendrakumar</p>
    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
    </ul>
    </div>
    </div>
    
    <div class="col-md">
    <div class="ftco-footer-widget mb-4 ml-md-5">
    <h2 class="ftco-heading-2">Information</h2>
    <ul class="list-unstyled">
    <li><a href="{{url('/')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
    <li><a href="{{url('/about')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
    <li><a href="{{url('/blog')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Blog</a></li>
    <li><a href="{{url('/contact')}}" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
    </ul>
    </div>
    </div>
    <div class="col-md">
    <div class="ftco-footer-widget mb-4">
    <h2 class="ftco-heading-2">Have a Questions?</h2>
    <div class="block-23 mb-3">
    <ul>
    <li><span class="icon icon-map-marker"></span><span class="text">1st Floor, Narmada Education Campus, Shuklatirth Road, Zadeshwar.</span></li>
    <li><a href="#"><span class="icon icon-phone"></span><span class="text">02642 221325</span></a></li>

    </ul>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12 text-center">
    <p>Blog CMS &copy; 2020 - Blog CMS | Developed by: 
        <strong>Bapu Safwan, Sagir Shehbaj & Parmar Harendrakumar</strong>
    </p>
    </div>
    </div>
    </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
    <script src="/js/google-map.js"></script>
    <script src="/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23581568-13');
    </script>
</body>
</html>