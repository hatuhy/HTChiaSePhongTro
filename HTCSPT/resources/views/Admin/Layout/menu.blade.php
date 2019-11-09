<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
                
            </div>
            <div class="title">
                <h1 class="h5">
                    <a > {{Auth::user()->name}}</a>
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
            <li><a href="admin/phongtro/danhsach"> <i class="icon-home"></i>Danh Sách Phòng Trọ</a></li>
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i
                        class="fas fa-flag"></i>Báo Cáo</a>
                <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                    <li><a href="admin/report/post_report">Bài Đăng</a></li>
                    <li><a href="phattrien">Tài Khoản</a></li>
                </ul>
            </li>
            <li><a href="admin/thongke"><i class="icon-windows"></i>Thống kê</a></li>
            <li><a href="index"><i class="fa fa-arrow-left"></i>Về Trang Chủ</a></li>
        </ul>
    </nav>