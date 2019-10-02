@extends('Admin.Layout.index')
@section('title')
<title>Danh Mục</title>
@endsection

    @section('content')
   
        
      <!-- Sidebar Navigation end-->
      <div class="page-content">
            <!-- Page Header-->
            <div class="page-header no-margin-bottom">
              <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Danh mục</h2>
              </div>
            </div>
            <!-- Breadcrumb-->
            <div class="container-fluid">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"></a></li>
                <!-- <li class="breadcrumb-item active">Danh mục</li> -->
              </ul>
            </div>
            <section class="no-padding-top">
              <div class="container-fluid">
                <div class="row">
                  <div class="col">
                    <div class="block margin-bottom-sm">
                      <div class="title"><strong>Danh sách danh mục</strong></div>
                      <a class="btn btn-info" data-toggle="modal" data-target="#">Thêm mới</a>
                      <div class="table-responsive"> 
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Mã danh mục</th>
                              <th>Tên danh mục</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($danhmucs as $dm)
                              <tr>
                              <td>{{$dm->name}}</td>
                              
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