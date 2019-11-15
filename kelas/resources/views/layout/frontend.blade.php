<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kilar University</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/frontend')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('/frontend')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('/frontend')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('/frontend')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand"><i class="flaticon-university"></i>Kilar <br><small>University</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
          <li class="nav-item"><a href="/sites/register" class="nav-link">Registrasi Mahasiswa</a></li>
          <li class="nav-item cta"><a href="/auths/login" class="nav-link"><span>Login</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
   @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="index.html"><i class="flaticon-university"></i>Kilar <br><small>University</small></a></h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="/" class="py-2 d-block">Home</a></li>
                <li><a href="/about" class="py-2 d-block">About</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Bekasi, Jwa Barat</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">081291226892 (Ami)
                  <li><<span class="icon icon-phone"></span><span class="text">087788124015 (Lesa)</span></a></li>
                  <li><span class="icon icon-envelope"></span><span class="text">a123minah@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ami, dan Lesa <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('/frontend')}}/js/jquery.min.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/frontend')}}/js/popper.min.js"></script>
  <script src="{{asset('/frontend')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('/frontend')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('/frontend')}}/js/aos.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('/frontend')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('/frontend')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('/frontend')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="{{asset('/frontend')}}/js/main.js"></script>
    
  </body>
</html>