@extends('Admin.Layout.index')
@section('title')
<title>Sửa Thông Tin Người Dùng</title>
@endsection

    @section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa Thông Tin Người Dùng
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        <form action="admin/nguoidung/change_user/{{$nguoidungs->id}}" method="POST">
                        @CSRF
                            <!-- <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control">
                                    <option value="0">Please Choose Category</option>
                                    <option value="">Tin Tức</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label>ID</label>
                                <input  class="form-control" readonly="readonly" value="{{$nguoidungs->id}}" name="ID" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input  class="form-control" readonly="readonly" value="{{$nguoidungs->name}}" name="Name" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input  class="form-control" readonly="readonly" value="{{$nguoidungs->email}}" name="Email" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select class="form-control"  name="Quyen">
                                    <option  <?php if ($nguoidungs->right == 1 ) echo 'selected' ; ?> value="1">Admin</option>
                                    <option  <?php if ($nguoidungs->right == 0 ) echo 'selected' ; ?> value="0">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <select class="form-control"  name="TinhTrang">
                                    <option  <?php if ($nguoidungs->status == 1 ) echo 'selected' ; ?> value="1">Còn hoạt động</option>
                                    <option  <?php if ($nguoidungs->status == 0 ) echo 'selected' ; ?> value="0">Đã Khóa</option>
                                </select>
                            </div>
                            

                           <!--  <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div> -->
                            <!-- <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
    

    <!-- jQuery -->
    <script src="assets_admin/asset/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets_admin/asset/vendor/bootstrap/js/bootstrap.min.js"></script>

    

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <!-- <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script> -->
</html>
