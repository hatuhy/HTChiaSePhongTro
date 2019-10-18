
@extends('Viewer.Layout.index')
    @section('title')
    <title>Danh sách tìm kiếm</title>
    @endsection
   
@section('content')

    <section class="ftco-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 search-wrap">
            <h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Tìm kiếm </h2>
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
    
    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          @foreach($phongtros as $phongtro)
          <div class="col-md-4 ftco-animate">
            <div class="properties">
              <a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/properties-1.jpg);">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                    <h6><a href="property-single.html">{{$phongtro->title}}</a></h6>
                    
                </div>
                <p> {{$phongtro->districts->name}}</p>
                <hr>
                <p class="bottom-area d-flex">
                  <span><i class="flaticon-selection"></i> {{$phongtro->area}}m2</span>
                                <span class="ml-auto">{{number_format($phongtro->price)}} VND/th</span>
                </p>
              </div>
            </div>
          </div>
         @endforeach
        </div>
        <div class="row mt-5">
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
 