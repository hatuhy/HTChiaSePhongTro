@extends('Admin.Layout.index')
@section('title')
<title>Danh Sách Phòng Trọ</title>
@endsection

    @section('content')
   
        
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
              <div class="container-fluid">
              <h2 class="h5 no-margin-bottom">
                <a href="admin">  Home / </a>
                <a href="admin/phongtro/danhsach">Danh Sách Phòng Trọ</a>
                </h2>
              </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
              <ul class="breadcrumb" style="padding: unset">
                <li class="breadcrumb-item"><a href="admin"></a></li>
                <!-- <li class="breadcrumb-item active">Danh mục</li> -->
              </ul>
            </div>
            <section class="no-padding-top">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="block margin-bottom-sm">
                      <div class="title"><strong>Danh sách Phòng Trọ</strong></div>
                     <!--  <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a> -->
                     @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                      <div class="table-responsive"> 
                        <table class="table" id="myTable">
                          <thead>
                            <tr>
                              <th style="width:7%";><input type="checkbox"/></th>
                              <th style="width:7%">ID</th>
                              <th style="width:20%">Tiêu Đề</th>
                              <th style="width:9%">Danh Mục</th>
                              <th style="width:10%">Giá </th>
                              <th style="width:8%">Views</th>
                              <th style="width:11%">Số lần chỉnh sửa</th>
                              <th style="width:10%">Lần sửa cuối</th>
                              <th style="width:7%">Đánh giá</th>
                              <th style="width:7%">Trạng Thái</th>
                              <th style="width:8%">Action</th>

                            </tr>
                          </thead>
                          <tbody>
                              @foreach($dspts as $pt)
                              <tr>
                              
                              <td><input type="checkbox"/></td>
                              <td>{{$pt->id}}</td>
                              <td>{{$pt->title}}</td>
                              <td>{{$pt->categories->name}}</td>
                              <td>{{number_format($pt->price)}}VND/Th</td>
                              @if($pt->approve==1)
                              <td style="color:green">
                              <i class="fas fa-check"></i>
                              </td>
                              @endif
                              <td>
                                  <!-- <button class="btn btn-success categoryButton Sua">Bỏ Kiểm duyệt</button> -->
                                  <button class="btn btn-success categoryButton Sua"><a href="admin/phongtro/xoa/{{$pt->id}}">
                                  <i class="far fa-edit"></i>
                                </a> </button>
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
