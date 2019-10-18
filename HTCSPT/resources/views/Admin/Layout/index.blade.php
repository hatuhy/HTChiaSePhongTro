<!DOCTYPE html>
<html>
  <head> 
  <base href="{{asset('')}}">
  @yield('title')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
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
    <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                <a href="#"><img src="assets_admin/asset/img/avatar-6.jpg" alt="..."
                        class="img-fluid rounded-circle"></a>
            </div>
            <div class="title">
                <h1 class="h5">
                    <a href="#">Hà Tú</a>
                </h1>
                <p>Administrator</p>
            </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
            <li><a href="admin/phongtrochuakiemduyet/danhsach"> <i class="icon-windows"></i>Kiểm Duyệt Phòng Trọ</a>
            </li>
            <li><a href="admin/danhmuc/danhsach"> <i class="fa fa-list-alt"></i>Danh Sách Danh Mục</a></li>
            <li><a href="admin/nguoidung/danhsach"><i class="icon-user"></i>Danh Sách Thành Viên</a></li>
            <li><a href="admin/phongtro/danhsach"> <i class="icon-home  "></i>Danh Sách Phòng Trọ</a></li>
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-flag"></i>Báo Cáo</a>
                <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                    <li><a href="admin/report/post_report">Bài Đăng</a></li>
                    <li><a href="../distribution/SanPham.html">Tài Khoản</a></li>
                </ul>
            </li>
            <li><a href="index"> <i class="fa fa-arrow-left"></i>Về Trang Chủ</a></li>
        </ul>
    </nav>
    @yield('content')
</div>
   
    
 

  

    @include('Admin.Layout.footer')
      <!-- JavaScript files-->
      <script src="assets_admin/asset/vendor/jquery/jquery.min.js"></script>
    <script src="assets_admin/asset/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="assets_admin/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets_admin/asset/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="assets_admin/asset/vendor/chart.js/Chart.min.js"></script>
    <script src="assets_admin/asset/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="assets_admin/asset/js/charts-home.js"></script>
    <script src="assets_admin/asset/js/front.js"></script>
    <script src="assets_admin/asset/js/script.js"></script>
  </body>
</html>