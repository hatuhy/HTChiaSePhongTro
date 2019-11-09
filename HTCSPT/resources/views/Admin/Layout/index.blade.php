<!DOCTYPE html>
<html>
  <head> 
  <base href="{{asset('')}}">
  @yield('title')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="assets_admin/asset/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
     <!-- Custom CSS -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     <link href="assets_admin/asset/css/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets_admin/asset/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="assets_admin/asset/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="assets_admin/asset/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets_admin/asset/css/custom.css">
    <!-- Favicon-->
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="assets_admin/asset/vendor/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="assets_admin/asset/css/dataTables.responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets_admin/asset/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  @include('Admin.Layout.header')
  <div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    @include('Admin.Layout.menu')
    @yield('content')
</div>
   
    
 

  

    @include('Admin.Layout.footer')
      <!-- JavaScript files-->
      <script src="assets_admin/asset/vendor/jquery/jquery.min.js"></script>
      <script src="assets_admin/asset/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets_admin/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_admin/asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <!-- <script src="assets_admin/asset/vendor/chart.js/Chart.min.js"></script> -->
    <script src="assets_admin/asset/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets_admin/asset/js/charts-home.js"></script>
    <script src="assets_admin/asset/js/front.js"></script>
    <script src="assets_admin/asset/js/dataTables.bootstrap.min.js"></script>
    <script src="assets_admin/asset/js/jquery.dataTables.js"></script>
    <script src="assets_admin/asset/js/script.js"></script>
  </body>
</html>