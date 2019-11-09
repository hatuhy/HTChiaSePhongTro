<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="admin" class="navbar-brand">
                    <div class="logo">
                        <a href="admin"><img src="login/images/icons/logo2.png" width="160" height="60"></a>
                        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
                    </div>
                    <!-- Sidebar Toggle Btn-->

            </div>
            <div class="right-menu list-inline no-margin-bottom">
                <!-- <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div> -->
                <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i
                            class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                        @foreach($mess as $thongbao)
                        <a href="#" class="dropdown-item message d-flex align-items-center">
                            <div class="profile"><img src="assets_admin/asset/img/avatar-5.jpg" alt="..."
                                    class="img-fluid">
                                <div class="status offline"></div>
                            </div>
                            <div class="content"> <strong class="d-block"></strong><span
                                    class="d-block">{{$thongbao->notification->title}}</span><small
                                    class="date d-block">{{$thongbao->created_at}}</small></div>
                        </a>
                        @endforeach
                        <a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i
                                    class="fa fa-angle-right"></i></strong></a></div>
                </div>
                <!-- Tasks-->


                <!-- Log out               -->
                <div class="list-inline-item logout">
                    <a id="logout" href="dangxuat" class="nav-link"> <span class="d-none d-sm-inline">Đăng xuất </span><i
                            class="icon-logout"></i></a></div>
            </div>
        </div>
    </nav>
</header>
