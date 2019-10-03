@extends('Admin.Layout.index')
@section('title')
<title>Danh Sách Người Dùng</title>
@endsection

    @section('content')
   
        
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
              <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">
                <a href="admin">  Home / </a>
                <a href="admin/nguoidung/danhsach">Danh Sách Người Dùng</a>
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
                      <div class="title"><strong>Danh sách người dùng</strong></div>
                      <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a>
                      <div class="table-responsive"> 
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>ID</th>
                              <th>Họ và Tên</th>
                              <th>Email</th>
                              <th>Quyền</th>
                              <th>Trạng Thái</th>
                              <th>Action</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>

                              @foreach($nguoidungs as $nd)
                              <tr>
                              
                              <td>{{$nd->id}}</td>
                              <td>{{$nd->id}}</td>
                              <td>{{$nd->name}}</td>
                              <td>{{$nd->email}}</td>
                              <td>{{$nd->right}} </td>
                              <td>{{$nd->tinhtrang}}</td>
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