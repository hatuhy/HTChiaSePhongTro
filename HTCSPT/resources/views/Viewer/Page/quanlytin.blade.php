@extends('Viewer.Layout.index')
@section('title')
<title>Quản lý đăng tin</title>
@endsection

    @section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="qltin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="qltin/css/shop-homepage.css" rel="stylesheet">
    <link href="qltin/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>



    <!-- Page Content -->
    <div class="container" >
        <div class="row">

            <div class="col-md-9 " >
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Quản lý đăng tin</b></h4>
                    </div>
                    <div class="row-item row">
                    @foreach($qltin as $ql)
                    
                        <div class="col-md-3">
                            <br>
                            <img src="assets/asset/images/{{$ql->images}}"width="200px" height="200px">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3>{{$ql->title}}</h3>
                            <br/>
                          
                            <a class="btn btn-primary" href="{{route('suatin',$ql->id)}}">Sửa</span></a>
                             <a class="btn btn-primary" href="{{route('xoatin',$ql->id)}}">Xóa</span></a>
                        </div>                     
                    @endforeach
                    
                        <!-- Pagination -->
                    
                        <!-- /.row -->
                    </div>

                </div>
            </div> 

        </div>

    </div>
    <!-- end Page Content -->

    <!--
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>
     end Footer -->
    <!-- jQuery -->
    <script src="qltin/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="qltin/js/bootstrap.min.js"></script>
    <script src="qltin/js/my.js"></script>

</body>

</html>
@endsection
