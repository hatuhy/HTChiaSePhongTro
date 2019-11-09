@extends('Viewer.Layout.index')
@section('title')
<title>Trang Chủ</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('assets/asset/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index">Trang chủ</a></span>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <h2 class="heading h5 d-flex align-items-center pr-4 btn-search"><span class="ion-ios-search mr-3"></span> Tìm kiếm
    </h2>
</div>
<section class="ftco-search d-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <form action="{{route('tim-kiem')}}" method="get" class="search-property">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Tiêu đề</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-pencil"></span></div>
                                    <input type="text" class="form-control" placeholder="Tiêu đề" name="tieude">
                                </div>
                            </div>
                        </div>

                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Vị trí</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="vitri" id="" class="form-control">
                                            @foreach($list_district as $quan)
                                            <option value="{{$quan->id}}">{{$quan->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Loại phòng</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="loaiphong" id="" class="form-control">
                                            @foreach($loaiphongs as $loaiphong)
                                            <option value="{{$loaiphong->id}}">{{$loaiphong->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->

<!--  Danh sách mới đăng -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Bài Viết Gần Đây</span>
                <h2 class="mb-4">Danh sách phòng trọ</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row_index">
            @foreach($phongtros as $phongtro)
            <div class="col-md-5 ftco-animate">
                <div class="properties">
                    <a href="{{route('chitiet',$phongtro->id)}}" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(assets/asset/images/{{$phongtro->images}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        @if($phongtro->form==0)
                        <span class="status sale ">Cho thuê</span>
                        @endif
                        @if($phongtro->form==1)
                        <span class="status sale" style="background:green">Tìm phòng</span>
                        @endif
                        @if($phongtro->form==2)
                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                        @endif
                        <div class="border">
                            <div class="info">
                                <span class="published">{{$phongtro->created_at}}</span>
                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                    <a href="#">{{$phongtro->districts->name}}</a> </span>
                                <h4 class="title vip">
                                    <a href="#" target="_blank">
                                        {{$phongtro->title}} </a>
                                </h4>
                                <dl class="">
                                    <dt>Diện tích:</dt>
                                    <dd>{{$phongtro->area}}m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Phòng trống:</dt>
                                    <dd>
                                        @if($phongtro->status==0)
                                        Hết phòng
                                        @endif
                                        @if($phongtro->status==1)
                                        Còn phòng
                                        @endif
                                    </dd>
                                </dl>

                                <div class="price">
                                    <div>
                                        <span>{{number_format($phongtro->price)}}</span><i>đồng/tháng</i>
                                    </div>
                                </div>
                                <dl class="address">
                                    <dt>Địa chỉ: </dt>
                                    <ad>{{$phongtro->address}}</ad>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row" style="margin-left:500px;">{{$phongtros->links()}}</div>
    </div>
</section>
<!-- Danh sách đề xuất theo địa chỉ -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">

            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Đề xuất cho bạn</span>
                <h2 class="mb-4">Danh sách phòng trọ</h2>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($phongtroBTL as $phongtro)
            <div class="col-md-5 ftco-animate">
                <div class="properties">
                    <a href="{{route('chitiet',$phongtro->id)}}" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(assets/asset/images/{{$phongtro->images}});">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        @if($phongtro->form==0)
                        <span class="status sale ">Cho thuê</span>
                        @endif
                        @if($phongtro->form==1)
                        <span class="status sale" style="background:green">Tìm phòng</span>
                        @endif
                        @if($phongtro->form==2)
                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                        @endif
                        <div class="border">
                            <div class="info">
                                <span class="published">{{$phongtro->created_at}}</span>
                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                    <a href="#">{{$phongtro->districts->name}}</a> </span>
                                <h4 class="title vip">
                                    <a href="#" target="_blank">
                                        {{$phongtro->title}} </a>
                                </h4>
                                <dl class="">
                                    <dt>Diện tích:</dt>
                                    <dd>{{$phongtro->area}}m<sup>2</sup></dd>
                                </dl>
                                <dl>
                                    <dt>Phòng trống:</dt>
                                    <dd>
                                        @if($phongtro->status==0)
                                        Hết phòng
                                        @endif
                                        @if($phongtro->status==1)
                                        Còn phòng
                                        @endif
                                    </dd>
                                </dl>

                                <div class="price">
                                    <div>
                                        <span>{{number_format($phongtro->price)}}</span><i>đồng/tháng</i>
                                    </div>
                                </div>
                                <dl class="address">
                                    <dt>Địa chỉ: </dt>
                                    <ad>{{$phongtro->address}}</ad>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row" style="margin-left:500px;">{{$phongtroBTL->links()}}</div>
    </div>
</section>




<section class="ftco-section" style="
    background-color: #e9ecef;">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Đọc bài viết</span>
                <h2>Blog gần đây</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="ctblog" class="block-20"
                        style="background-image: url('assets/asset/images/1.jpg');">
                    </a>
                    <div class="text mt-3 d-block">
                        <h3 class="heading mt-3"><a href="#">Nên ở ký túc xá hay phòng trọ?</a></h3>
                        <div class="meta mb-3">
                            <div><a href="ctblog">1/10/2019</a></div>
                            <div><a href="ctblog">Admin</a></div>
                            <div><a href="ctblog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="ctblog" class="block-20"
                        style="background-image: url('assets/asset/images/2.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Những lợi ích và rủ ro khi thuê nhà qua môi giới</a></h3>
                        <div class="meta mb-3">
                            <div><a href="ctblog">1/10/2019</a></div>
                            <div><a href="ctblog">Admin</a></div>
                            <div><a href="ctblog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="ctblog" class="block-20"
                        style="background-image: url('assets/asset/images/3.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Thuê phòng trọ giá rẻ, tốt cần lưu ý những gì</a></h3>
                        <div class="meta mb-3">
                            <div><a href="ctblog">1/10/2019</a></div>
                            <div><a href="ctblog">Admin</a></div>
                            <div><a href="ctblog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="ctblog" class="block-20"
                        style="background-image: url('assets/asset/images/4.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Cảnh giác Chiêu trò Lừa đảo của Chủ trọ</a></h3>
                        <div class="meta mb-3">
                            <div><a href="ctblog">1/10/2019</a></div>
                            <div><a href="ctblog">Admin</a></div>
                            <div><a href="ctblog" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Đăng ký để nhận tin của chúng tôi</h2>
                    <p>CSPT, Uy tín - tiện lợi - đơn giản</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Nhập email">
                                    <input type="submit" value="Đăng ký" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
