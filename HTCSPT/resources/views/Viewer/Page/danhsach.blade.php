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
                        aria-controls="v-pills-0" aria-selected="true">Phòng Trọ Cho Thuê</a>

                    <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                        aria-controls="v-pills-1" aria-selected="false">Ở ghép</a>

                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                        aria-controls="v-pills-2" aria-selected="false">Nhà Nguyên Căn</a>
                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                        aria-controls="v-pills-3" aria-selected="false">Chung Cư</a>
                </div>
            </div>
            <section class="ftco-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 search-wrap">
                            <h2 class="heading h5 d-flex align-items-center pr-4"><span
                                    class="ion-ios-search mr-3"></span> Tìm kiếm
                            </h2>
                            <form action="#" class="search-property">
                                <div class="row">
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label for="#">Từ khóa</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-my_location"></span></div>
                                                <input type="text" class="form-control" placeholder="Từ khóa">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label for="#">Vị trí</label>
                                            <div class="form-field">
                                                <div class="icon"><span class="icon-my_location"></span></div>
                                                <input type="text" class="form-control"
                                                    placeholder="Tên thành phố/Địa phương">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md align-items-end">
                                        <div class="form-group">
                                            <label for="#">Loại phòng</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Loại phòng</option>
                                                        <option value="">Phòng khép kín</option>
                                                        <option value="">Phòng không khép kín</option>
                                                        <option value="">Phòng đơn</option>
                                                        <option value="">Phòng đôi</option>
                                                        <option value="">Phòng gia đình</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md align-self-end">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Tìm kiếm"
                                                    class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-md-12 lign-items-center">
                <div class="tab-content ftco-animate" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                        aria-labelledby="v-pills-0-tab">
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
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-2.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-3.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status rent">Rent</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
                                                <p>Apartment</p>
                                            </div>
                                            <div class="two">
                                                <span class="price">$800 <small>/ month</small></span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-4.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-5.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-6.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-7.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status rent">Rent</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
                                                <p>Apartment</p>
                                            </div>
                                            <div class="two">
                                                <span class="price">$899 <small>/ month</small></span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-8.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-9.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                        </div>
                        <!-- <div class="row mt-5">
                            <div class="col text-center">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
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
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-2.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-3.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status rent">Rent</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
                                                <p>Apartment</p>
                                            </div>
                                            <div class="two">
                                                <span class="price">$800 <small>/ month</small></span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-4.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-5.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-6.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-7.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status rent">Rent</span>
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="property-single.html">North Parchmore Street</a></h3>
                                                <p>Apartment</p>
                                            </div>
                                            <div class="two">
                                                <span class="price">$899 <small>/ month</small></span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-8.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                            <div class="col-md-4 ftco-animate">
                                <div class="properties">
                                    <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url(assets/asset/images/properties-9.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <span class="status sale">Sale</span>
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
                        </div>
                        <!-- <div class="row mt-5">
                            <div class="col text-center">
                                <div class="block-27">
                                    <ul>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-1.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Lemonade Juice</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-2.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Pineapple Juice</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-3.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Soda Drinks</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-4.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Lemonade Juice</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-5.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Pineapple Juice</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/drink-6.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Soda Drinks</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-1.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-2.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-3.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-4.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-5.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="menu-wrap">
                                    <a href="product-detail" class="menu-img img mb-4"
                                        style="background-image: url({{ asset('assets/client') }}/images/dessert-6.jpg);"></a>
                                    <div class="text">
                                        <h3><a href="product-single">Hot Cake Honey</a></h3>
                                        <p class="price"><span>45.000VND</span></p>
                                        <p><a href="cart" class="btn btn-primary btn-outline-primary">Add
                                                to cart</a></p>
                                    </div>
                                </div>
                            </div>
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
