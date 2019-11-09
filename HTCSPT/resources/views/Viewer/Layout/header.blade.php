<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <div class="logo">
            <a href="index"><img src="assets/asset/images/logo2.png" width="160" height="60"></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="index" class="nav-link">Trang chủ</a></li>
                <li class="nav-item"><a href="danhsach" class="nav-link">Danh sách</a>
                    <!-- <ul>
				  @foreach($danhmuc as $loai)
				  <li><a href="">{{$loai->name}}</a>
				  </li>
				  @endforeach
				</ul> -->
                </li>
                <li class="nav-item"><a href="abouts" class="nav-link">About</a></li>
                <li class="nav-item"><a href="dsblog" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="lienhe" class="nav-link">Liên hệ</a></li>
                <li class="nav-item"><a href="dangtin" class="nav-link">Đăng bài</a></li>

                <!-- @if(Auth::check())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="quanlytin">Quản Lý Tin</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="phattrien">Thông tin</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="dangxuat">Đăng Xuất</a>
                    </div>
                </li>
                @else
                <li class="nav-item cta"><a href="dangnhap" class="nav-link ml-lg-2"><span class="icon-user"></span>
                        Đăng
                        nhập</a></li>
                </li>
                @endif -->
                @if(Auth::check())
                <li class="nav-item">
                    <div class="dropdown1">
                        <button class="dropbtn1">{{Auth::user()->name}}
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown1-content">
                            <a href="quanlytin">Quản Lý Tin</a>
                            <a href="phattrien">Thông tin</a>
                            <a href="dangxuat">Đăng Xuất</a>
                        </div>
                    </div>
                </li>
                @else
                <li class="nav-item cta"><a href="dangnhap" class="nav-link ml-lg-2"><span class="icon-user"></span>
                        Đăng
                        nhập</a></li>
                @endif

                <!--  <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i
                            class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                  
                    <a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="assets_admin/asset/img/avatar-5.jpg" alt="..."
                                    class="img-fluid">
                                <div class="status offline"></div>
                            </div>
                            <div class="content"> <strong class="d-block">Sara Wood</strong><span class="d-block"></span><small class="date d-block"></small></div>
                        </a>
                    
                        <a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i
                                    class="fa fa-angle-right"></i></strong></a></div>
              </div> -->
            </ul>
        </div>
    </div>
</nav>
