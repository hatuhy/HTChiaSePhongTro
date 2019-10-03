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
                <a href="admin/nguoidung/danhsach">Danh Sách Phòng Trọ</a>
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
                      <div class="title"><strong>Danh sách Phòng Trọ</strong></div>
                      <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a>
                      <div class="table-responsive"> 
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>ID</th>
                              <th>Tiêu Đề</th>
                              <th>Danh Mục</th>
                              <th>Giá Phòng </th>
                              <th>Trạng Thái</th>
                              <th>Action</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>

                              @foreach($dspts as $pt)
                              <tr>
                              
                              <td>{{$pt->id}}</td>
                              <td>{{$pt->id}}</td>
                              <td>{{$pt->title}}</td>
                              <td>{{$pt->category_id}}</td>
                              <td>{{$pt->price}} </td>
                              <td>{{$pt->approve}}</td>
                              <td><button class="btn btn-success categoryButton Sua">Action</button></td>
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