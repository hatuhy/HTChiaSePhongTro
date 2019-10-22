@extends('Admin.Layout.index')
@section('title')
<title>Danh Sách Phòng Trọ Chưa Kiểm Duyệt</title>
@endsection

    @section('content')
   
        
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
              <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">
                <a href="admin">  Home / </a>
                <a href="admin/phongtrochuakiemduyet/danhsach">Danh Sách Phòng Trọ Chưa Kiểm Duyệt</a>
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
                      <div class="title"><strong>Danh sách Phòng Trọ Chưa Kiểm Duyệt</strong></div>
                     <!--  <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a> -->
                      <div class="table-responsive"> 
                      
                        <table class="table">
                          <thead>
                            <tr>
                              <th><input type="checkbox"/></th>
                              <th>ID</th>
                              <th>Tiêu Đề</th>
                              <th>Danh Mục</th>
                              <th>Giá Phòng </th>
                              <th>Người Đăng</th>
                              <th>Kiểm Duyệt</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $i=0;
                              ?>                          
                              @foreach($dsptckds as $ptckd)
                              <?php
                                $i+=1;
                              ?>
                              <tr>
                              <td><input type="checkbox"/></td>
                              <td>{{$ptckd->id}}</td>
                              <td>{{$ptckd->title}}</td>
                              <td>{{$ptckd->categories->name}}</td>
                              <td>{{number_format($ptckd->price)}}VND/Th</td>                             
                              <td>{{$ptckd->users->name}}</td>         
                              <td>
                                  <!-- <button class="btn btn-success categoryButton Sua">Bỏ Kiểm duyệt</button> -->
                            @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        <form action="admin/phongtrochuakiemduyet/kiemduyet/{{$ptckd->id}}" method="get">
                        @CSRF
                                  <button class="btn btn-success categoryButton Sua"><a href="admin/phongtrochuakiemduyet/kiemduyet/{{$ptckd->id}}">Accept</a> </button>
                              </form>
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