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
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Home
                        </strong><strong> Share</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">H</strong><strong>S</strong></div>
                </a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
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
                            <div class="content"> <strong class="d-block">Sara Wood</strong><span class="d-block">{{$thongbao->notification->title}}</span><small class="date d-block">{{$thongbao->created_at}}</small></div>
                        </a>
                        @endforeach
                        <a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i
                                    class="fa fa-angle-right"></i></strong></a></div>
                </div>
                <!-- Tasks-->
                <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i
                            class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                    <div aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list"><a href="#"
                            class="dropdown-item">
                            <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40%
                                    complete</span></div>
                            <div class="progress">
                                <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar dashbg-1"></div>
                            </div>
                        </a><a href="#" class="dropdown-item">
                            <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20%
                                    complete</span></div>
                            <div class="progress">
                                <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar dashbg-3"></div>
                            </div>
                        </a><a href="#" class="dropdown-item">
                            <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70%
                                    complete</span></div>
                            <div class="progress">
                                <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar dashbg-2"></div>
                            </div>
                        </a><a href="#" class="dropdown-item">
                            <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>30%
                                    complete</span></div>
                            <div class="progress">
                                <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar dashbg-4"></div>
                            </div>
                        </a><a href="#" class="dropdown-item">
                            <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>65%
                                    complete</span></div>
                            <div class="progress">
                                <div role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                    aria-valuemax="100" class="progress-bar dashbg-1"></div>
                            </div>
                        </a><a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i
                                    class="fa fa-angle-right"></i></strong></a>
                    </div>
                </div>
               
                <!-- Log out               -->
                <div class="list-inline-item logout">
                    <a id="logout" href="#" class="nav-link"> <span class="d-none d-sm-inline">Đăng xuất </span><i
                            class="icon-logout"></i></a></div>
            </div>
        </div>
    </nav>
</header>
