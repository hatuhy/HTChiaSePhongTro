@extends('Admin.Layout.index')
@section('title')
<title>Danh Sách Báo Lỗi Phòng Trọ</title>
@endsection

    @section('content')
   
        
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
              <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">
                <a href="admin">  Home / </a>
                <a href="admin/report/post_report">Danh Sách Báo Lỗi Phòng Trọ</a>
                </h2>
              </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin"></a></li>
                <!-- <li class="breadcrumb-item active">Danh mục</li> -->
              </ul>
            </div>
            <section class="no-padding-top">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="block margin-bottom-sm">
                      <div class="title"><strong>Danh Sách Báo Lỗi Phòng Trọ</strong></div>
                      @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        
                        
                      <button class="btn btn-success categoryButton Sua">
                                  <i class="fas fa-comment-dots"></i>
                              </button>
                     <!--  <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a> -->
                      <div class="table-responsive"> 
                      
                        <table class="table">
                          <thead>
                            <tr>
                              <th><input type="checkbox"/></th>
                              <th>Họ Và Tên</th>
                              <th>Bài Đăng</th>
                              <th>Tài Khoản</th>
                              <th>Trạng Thái </th>
                              <th>Thời Gian</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $i=0;
                              ?>                          
                              @foreach($list_rp as $prp)
                              <?php
                                $i+=1;
                              ?>
                              <tr>
                              <td>{{$i}}</td>
                              <td>{{$prp->name}}</td>
                              <td>{{$prp->motelrooms->title}}</td>
                              <td>{{$prp->motelrooms->users->name}}</td>
                              @if($prp->status==2)
                              <td style="color:red">
                                  Sai nội dung
                              </td>
                              @endif
                              @if($prp->status==1)
                              <td style="color:orange">
                                  Đã cho thuê
                              </td>
                              @endif
                              <td>{{($prp->created_at)}}</td>
                              <td>
                              <form action="admin/report/sent_noti/{{$prp->id}}" method="POST">
                               @CSRF
                                  <!-- <button class="btn btn-success categoryButton Sua">Bỏ Kiểm duyệt</button> -->
                                  <button type="submit" class="btn btn-success categoryButton Sua">
                                    <a href="admin/report/sent_noti{{$prp->id}}">
                                    <i class="fas fa-comment-dots"></i>
                                    </a>      
                              </button>
                              </td>
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </section>
      @endsection