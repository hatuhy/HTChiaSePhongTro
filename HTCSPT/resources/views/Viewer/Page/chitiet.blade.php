@extends('Viewer.Layout.index')
@section('title')
<title>{{$pt->title}}</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('assets/asset/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                        class="mr-2"><a href="index">Trang chủ</a></span> <span class="mr-2"><a
                            href="dsblog">Blog</a></span> <span>Chi tiết phòng trọ</span></p>
                <h1 class="mb-3 bread">Chi tiết Phòng trọ</h1>
            </div>
        </div>
    </div>
</div>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="single-slider owl-carousel">
                            <div class="item">
                                <div class="properties-img"
                                    style="background-image: url(assets/asset/images/{{$pt->images}});"></div>
                            </div>
                            <!-- <div class="item">
          					<div class="properties-img" style="background-image: url(assets/asset/images/tro1a.jpg);"></div>
          				</div>
          				<div class="item">
          					<div class="properties-img" style="background-image: url(assets/asset/images/tro1b.jpg);"></div>
          				</div> -->
                        </div>
                    </div>
                    <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                        @if($pt->form==0)
                        <h4 style="color:blue"><i class="">Cho Thuê Trọ</i></h4>
                        @endif
                        @if($pt->form==1)
                        <h4 style="color:yellow"><i class="">Tìm Phòng</i></h4>
                        @endif
                        @if($pt->form==2)
                        <h4 style="color:#6f42c1"><i class=""></i>Tìm ở ghép</h4>
                        @endif


                        <h2 style="margin-bottom: 80px;">{{$pt->title}}</h2>

                        <p class="rate mb-4">
                            <span><a href=""><i class="fas fa-map-marker-alt"></i> Địa chỉ: </a> {{$pt->address}}</span>
                            <hr>
                            <span><a href=""><i class=""></i>Chủ trọ: </a> {{$pt->users->name}}</span>
                            <span style="float: right;"><a href=""><i class="icon-phone "></i> Điện thoại liên hệ: </a>
                                {{$pt->phone}}</span>
                            <hr>
                            <span><a href=""><i class=" "></i> Hình thức : </a> {{$pt->categories->name}}</span>
                            <span style="float: right;"><a href=""><i class=""></i> Diện tích: </a>{{$pt->area}}
                                m<sup>2</sup> </span>
                            <hr>
                            <span><a href=""><i class=""></i> Giá : </a> {{number_format($pt->price)}} /th</span>
                            <span style="float:right"><a href=""><i class=""></i> Phòng trống: </a>
                                @if($pt->status==0)
                                Hết phòng
                                @endif
                                @if($pt->status==1)
                                Còn phòng
                                @endif
                            </span>
                            <hr>
                            <span><a href=""><i class=""></i> Mô tả chi tiết: </a></span>
                        </p>
                        <div>
                            {{$pt->description}}
                        </div>

                    </div>


                    <div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
                        <h4 class="mb-4">Đề xuất cho bạn</h4>
                        <div class="row">
                            @foreach($phongtroBTL as $phongtro)
                            <div class="col-md-7 ftco-animate">
                                <div class="properties">
                                    <a href="{{route('chitiet',$phongtro->id)}}"
                                        class="img img-2 d-flex justify-content-center align-items-center"
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
                    </div>
      
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                
                <div class="sidebar-box ftco-animate">
                    <h3>Blog gần đây</h3>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(assets/asset/images/1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="ctblog">Nên ở ký túc xá hay phòng trọ?</a></h3>
                            <div class="meta">
                                <div><a href=""><span class="icon-calendar"></span> 1/10/2019</a></div>
                                <div><a href=""><span class="icon-person"></span> Admin</a></div>
                                <div><a href=""><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(assets/asset/images/2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="ctblog">Những lợi ích và rủ ro khi thuê nhà qua môi giới</a></h3>
                            <div class="meta">
                                <div><a href=""><span class="icon-calendar"></span> 1/10/2019</a></div>
                                <div><a href=""><span class="icon-person"></span> Admin</a></div>
                                <div><a href=""><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(assets/asset/images/3.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="ctblog">Thuê phòng trọ giá rẻ, tốt cần lưu ý những gì</a></h3>
                            <div class="meta">
                                <div><a href=""><span class="icon-calendar"></span> 1/10/2019</a></div>
                                <div><a href=""><span class="icon-person"></span> Admin</a></div>
                                <div><a href=""><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>


</section> <!-- .section -->


<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Đăng ký để nhận tin của chúng tôi</h2>
                    <p>CSPT, Uy tín - tiện lợi - đơn giản</p>
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-md-8">
                            <form action="#" class="subscribe-form">
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
