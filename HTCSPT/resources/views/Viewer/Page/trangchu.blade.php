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

<section class="ftco-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 search-wrap">
                <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Tìm kiếm
                </h2>
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
</section>


<section class="ftco-section ftco-properties">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Bài viết gần đây</span>
                <h2 class="mb-4">Danh sách phòng trọ</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="properties-slider owl-carousel ftco-animate">
                    @foreach($phongtros as $phongtro)
                    <div class="item">
                        <div class="properties">
                            <a href="chitiet" class="img d-flex justify-content-center align-items-center"
                                style="background-image: url(assets/asset/images/tro4.jpg);">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3">
                                <div class="a1">
                                    <span class="local">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$phongtro->districts->name}}
                                    </span>
                                    <span class="time">
                                        {{$phongtro->updated_at}}
                                    </span>
                                </div>
                                <div class="d-flex">
                                    <div class="one">
                                        <h3>
                                            <a href="chitiet">
                                                <i class="far fa-check-circle"></i>
                                                {{$phongtro->title}}
                                            </a></h3>

                                    </div>
                                    <div class="two">
                                        <span class="price">{{number_format($phongtro->price)}}
                                            VND/th<small></small></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

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
            <div class="col-md-4 ftco-animate">
                <div class="properties">
                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(assets/asset/images/properties-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <span class="status sale">Cho Thuê</span>
                        <div class="d-flex">
                            <div class="one">
                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
                                <p>Apartment</p>
                            </div>
                            <div class="two">
                                <span class="price">$20,000</span>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries</p>
                        <hr>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i> 250sqft</span>
                            <span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
                            <span><i class="flaticon-bed"></i> 4</span>
                        </p>
                    </div>
                </div>
            </div>
            @foreach($phongtros as $phongtro)
            <div class="col-sm col-md-6 col-lg ftco-animate">
                <div class="properties">
                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                        style="background-image: url(assets/asset/images/properties-1.jpg);">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3">
                        <div class="d-flex">
                            <h6><a href="chitiet"></a></h6>
                            {{$phongtro->title}}
                        </div>
                        <p> {{$phongtro->address}}</p>
                        <hr>
                        <p style="    text-align: center;  font-size: 15px;  color: blue; ">
                            {{number_format($phongtro->price)}}<i> vnđ/tháng</i></p>
                        <p class="bottom-area d-flex">
                            <span><i class="flaticon-selection"></i>{{$phongtro->area}}m<sup>2</sup></span>
                            <span class="ml-auto">
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      
    </div>
   
</section>




<section class="ftco-section">
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
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/asset/images/1.jpg');">
                    </a>
                    <div class="text mt-3 d-block">
                        <h3 class="heading mt-3"><a href="#">Nên ở ký túc xá hay phòng trọ?</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">1/10/2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/asset/images/2.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Những lợi ích và rủ ro khi thuê nhà qua môi giới</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">1/10/2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/asset/images/3.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Thuê phòng trọ giá rẻ, tốt cần lưu ý những gì</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">1/10/2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/asset/images/4.jpg');">
                    </a>
                    <div class="text mt-3">
                        <h3 class="heading mt-3"><a href="#">Cảnh giác Chiêu trò Lừa đảo của Chủ trọ</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">1/10/2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
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
