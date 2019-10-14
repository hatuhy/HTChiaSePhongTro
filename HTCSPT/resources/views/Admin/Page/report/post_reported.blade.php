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
                     <!--  <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a> -->
                      <div class="table-responsive"> 
                      
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Họ Và Tên</th>
                              <th>Bài Đăng</th>
                              <th>Trạng Thái </th>
                              <th>Thời Gian</th>
                              <th></th>
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
                              <td>{{$prp->ip_address }}</td>
                              <td>{{$prp->motelrooms->title}}</td>
                              @if($prp->status==2)
                              <td style="color:red">
                                  Sai nội dung
                              </td>
                              @endif
                              <td>{{($prp->created_at)}}</td>
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