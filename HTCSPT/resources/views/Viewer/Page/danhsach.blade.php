@extends('Viewer.Layout.index')
@section('title')
<title>Danh sách</title>
@endsection

@section('content')

<div class="hero-wrap" style="background-image: url('assets/asset/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index">Trang chủ</a></span> <span>Danh sách</span>
                </p>
                <h1 class="mb-3 bread">Danh sách</h1>
            </div>
        </div>
    </div>
</div>
<!-- tab -->
<div class="row d-md-flex">
    <div class="col-lg-12 ftco-animate p-md-5">
        <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">

                    <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0" role="tab"
                        aria-controls="v-pills-0" aria-selected="true">Phòng Trọ</a>

                    <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                        aria-controls="v-pills-1" aria-selected="false">Chung cư mini</a>

                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                        aria-controls="v-pills-2" aria-selected="false">Nhà nguyên căn</a>
                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                        aria-controls="v-pills-3" aria-selected="false">Ký túc xá</a>
                    <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab"
                        aria-controls="v-pills-4" aria-selected="false">Homestay</a>
                </div>
            </div>
            <div class="container_search">
                <h2 class="heading h5 d-flex align-items-center pr-4 btn-search" style="float:right;"><span
                        class="ion-ios-search mr-3"></span> Tìm kiếm
                </h2>
            </div>
            <section class="ftco-search d-none">
                <div class="s010">
                    <form>
                        <div class="inner-form">
                            <div class="basic-search">
                                <div class="input-field">
                                    <input id="search" type="text" placeholder="Type Keywords" />
                                    <div class="icon-wrap">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="advance-search">
                                <span class="desc">ADVANCED SEARCH</span>
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Accessories</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Color</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Size</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row second">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Sale</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Time</option>
                                                <option>Last time</option>
                                                <option>Today</option>
                                                <option>This week</option>
                                                <option>This month</option>
                                                <option>This year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Type</option>
                                                <option>Subject b</option>
                                                <option>Subject c</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row third">
                                    <div class="input-field">
                                        <div class="result-count">
                                            <span>108 </span>results</div>
                                        <div class="group-btn">
                                            <button class="btn-delete" id="delete">RESET</button>
                                            <button class="btn-search">SEARCH</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
            <div class="col-md-12 lign-items-center">
                <div class="tab-content ftco-animate" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                        aria-labelledby="v-pills-0-tab">
                        <div class="row">
                            @foreach($dsphongtro as $phongtro)
                            <div class="col-md-4 ftco-animate">
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
                                                    <a href="{{route('chitiet',$phongtro->id)}}" target="_blank">
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
                                                        <span style="color: red" ;>Hết phòng</span>

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
                    <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                        <div class="row">
                            @foreach($dschungcu as $chungcu)
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/{{$chungcu->images}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        @if($chungcu->form==0)
                                        <span class="status sale ">Cho thuê</span>
                                        @endif
                                        @if($chungcu->form==1)
                                        <span class="status sale" style="background:green">Tìm phòng</span>
                                        @endif
                                        @if($chungcu->form==2)
                                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                                        @endif
                                        <div class="border">
                                            <div class="info">
                                                <span class="published">{{$chungcu->created_at}}</span>
                                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                                    <a href="#">{{$chungcu->districts->name}}</a> </span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank">
                                                        {{$chungcu->title}} </a>
                                                </h4>
                                                <dl class="">
                                                    <dt>Diện tích:</dt>
                                                    <dd>{{$chungcu->area}}m<sup>2</sup></dd>
                                                </dl>
                                                <dl>
                                                    <dt>Phòng trống:</dt>
                                                    <dd>
                                                        @if($chungcu->status==0)
                                                        <span style="color: red" ;>Hết phòng</span>
                                                        @endif
                                                        @if($chungcu->status==1)
                                                        Còn phòng
                                                        @endif
                                                    </dd>
                                                </dl>

                                                <div class="price">
                                                    <div>
                                                        <span>{{number_format($chungcu->price)}}</span><i>đồng/tháng</i>
                                                    </div>
                                                </div>
                                                <dl class="address">
                                                    <dt>Địa chỉ: </dt>
                                                    <ad>{{$chungcu->address}}</ad>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                      
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="row">
                            @foreach($dsnhanc as $nhanc)
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/{{$nhanc->images}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        @if($nhanc->form==0)
                                        <span class="status sale ">Cho thuê</span>
                                        @endif
                                        @if($nhanc->form==1)
                                        <span class="status sale" style="background:green">Tìm phòng</span>
                                        @endif
                                        @if($nhanc->form==2)
                                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                                        @endif
                                        <div class="border">
                                            <div class="info">
                                                <span class="published">{{$nhanc->created_at}}</span>
                                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                                    <a href="#">{{$nhanc->districts->name}}</a> </span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank">
                                                        {{$nhanc->title}} </a>
                                                </h4>
                                                <dl class="">
                                                    <dt>Diện tích:</dt>
                                                    <dd>{{$nhanc->area}}m<sup>2</sup></dd>
                                                </dl>
                                                <dl>
                                                    <dt>Phòng trống:</dt>
                                                    <dd>
                                                        @if($nhanc->status==0)
                                                        <span style="color: red" ;>Hết phòng</span>
                                                        @endif
                                                        @if($nhanc->status==1)
                                                        Còn phòng
                                                        @endif
                                                    </dd>
                                                </dl>

                                                <div class="price">
                                                    <div>
                                                        <span>{{number_format($nhanc->price)}}</span><i>đồng/tháng</i>
                                                    </div>
                                                </div>
                                                <dl class="address">
                                                    <dt>Địa chỉ: </dt>
                                                    <ad>{{$nhanc->address}}</ad>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                       
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div class="row">
                            @foreach($dsktx as $ktx)
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/{{$ktx->images}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        @if($ktx->form==0)
                                        <span class="status sale ">Cho thuê</span>
                                        @endif
                                        @if($ktx->form==1)
                                        <span class="status sale" style="background:green">Tìm phòng</span>
                                        @endif
                                        @if($ktx->form==2)
                                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                                        @endif
                                        <div class="border">
                                            <div class="info">
                                                <span class="published">{{$ktx->created_at}}</span>
                                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                                    <a href="#">{{$ktx->districts->name}}</a> </span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank">
                                                        {{$ktx->title}} </a>
                                                </h4>
                                                <dl class="">
                                                    <dt>Diện tích:</dt>
                                                    <dd>{{$ktx->area}}m<sup>2</sup></dd>
                                                </dl>
                                                <dl>
                                                    <dt>Phòng trống:</dt>
                                                    <dd>
                                                        @if($ktx->status==0)
                                                        <span style="color: red" ;>Hết phòng</span>
                                                        @endif
                                                        @if($ktx->status==1)
                                                        Còn phòng
                                                        @endif
                                                    </dd>
                                                </dl>

                                                <div class="price">
                                                    <div>
                                                        <span>{{number_format($ktx->price)}}</span><i>đồng/tháng</i>
                                                    </div>
                                                </div>
                                                <dl class="address">
                                                    <dt>Địa chỉ: </dt>
                                                    <ad>{{$ktx->address}}</ad>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                    <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                        <div class="row">
                            @foreach($dshomestay as $homestay)
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/{{$homestay->images}});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        @if($homestay->form==0)
                                        <span class="status sale ">Cho thuê</span>
                                        @endif
                                        @if($homestay->form==1)
                                        <span class="status sale" style="background:green">Tìm phòng</span>
                                        @endif
                                        @if($homestay->form==2)
                                        <span class="status sale" style="background:#6f42c1">Tìm ở ghép</span>
                                        @endif
                                        <div class="border">
                                            <div class="info">
                                                <span class="published">{{$homestay->created_at}}</span>
                                                <span class="local"><i class="fas fa-map-marker-alt"></i>
                                                    <a href="#">{{$homestay->districts->name}}</a> </span>
                                                <h4 class="title vip">
                                                    <a href="#" target="_blank">
                                                        {{$homestay->title}} </a>
                                                </h4>
                                                <dl class="">
                                                    <dt>Diện tích:</dt>
                                                    <dd>{{$homestay->area}}m<sup>2</sup></dd>
                                                </dl>
                                                <dl>
                                                    <dt>Phòng trống:</dt>
                                                    <dd>
                                                        @if($homestay->status==0)
                                                        <span style="color: red" ;>Hết phòng</span>
                                                        @endif
                                                        @if($homestay->status==1)
                                                        Còn phòng
                                                        @endif
                                                    </dd>
                                                </dl>

                                                <div class="price">
                                                    <div>
                                                        <span>{{number_format($homestay->price)}}</span><i>đồng/tháng</i>
                                                    </div>
                                                </div>
                                                <dl class="address">
                                                    <dt>Địa chỉ: </dt>
                                                    <ad>{{$homestay->address}}</ad>
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
            </div>
        </div>
    </div>
</div>







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
