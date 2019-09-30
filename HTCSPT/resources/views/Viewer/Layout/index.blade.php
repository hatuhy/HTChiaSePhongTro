<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset(' ')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="assets/asset/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/asset/css/animate.css">
    
    <link rel="stylesheet" href="assets/asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/asset/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/asset/css/aos.css">

    <link rel="stylesheet" href="assets/asset/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/asset/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/asset/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/asset/css/flaticon.css">
    <link rel="stylesheet" href="assets/asset/css/icomoon.css">
    <link rel="stylesheet" href="assets/asset/css/style.css">
  </head>
  <body>
    @include('Viewer.Layout.header')
    @yield('content')
    
 

  

    @include('Viewer.Layout.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/asset/js/jquery.min.js"></script>
  <script src="assets/asset/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/asset/js/popper.min.js"></script>
  <script src="assets/asset/js/bootstrap.min.js"></script>
  <script src="assets/asset/js/jquery.easing.1.3.js"></script>
  <script src="assets/asset/js/jquery.waypoints.min.js"></script>
  <script src="assets/asset/js/jquery.stellar.min.js"></script>
  <script src="assets/asset/js/owl.carousel.min.js"></script>
  <script src="assets/asset/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/asset/js/aos.js"></script>
  <script src="assets/asset/js/jquery.animateNumber.min.js"></script>
  <script src="assets/asset/js/bootstrap-datepicker.js"></script>
  <script src="assets/asset/js/jquery.timepicker.min.js"></script>
  <script src="assets/asset/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/asset/js/google-map.js"></script>
  <script src="assets/asset/js/main.js"></script>
    
  </body>
</html>