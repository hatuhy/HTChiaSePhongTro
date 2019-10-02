
    @extends('Viewer.Layout.index')
    @section('title')
    <title>Trang Chủ</title>
    @endsection
   
@section('content')
    <section class="home-slider owl-carousel">
      
      <div class="slider-item" style="background-image:url(assets/asset/images/nha2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
          <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3">CHO THUÊ PHÒNG GIÁ RẺ KHU MỄ TRÌ THƯỢNG</h1>
            <span class="location d-block mb-3"><i class="icon-my_location"></i> Mễ Trì Thượng, Mễ Trì, Từ Liêm, Hà Nội, Việt Nam</span>
            <p>❌❌❌CHO THUÊ PHÒNG full nội thất CỰC ĐẸP, CỰC RẺ (điều hoà, nóng lạnh, tủ, giường) KHU VỰC MỄ TRÌ THƯỢNG 🏡Địa chỉ: ngõ 230/21/15 Mễ Trì Thượng 👉Giờ giấc tự do, VS khép kín, riêng chủ, có gác xép... 👉Điện 3.5k/số; nước 28k/m3; mạng 100k/ph; vệ sinh 30k/người 📞Lh:.</p>
            <span class="price">Giá: 3.1-3.3tr</span>
            <a href="chitiet" class="btn-custom p-3 px-4 bg-primary">Xem chi tiết <span class="icon-plus ml-1"></span></a>
          </div>
        </div>
        </div>
      </div>
  


      <div class="slider-item" style="background-image:url(assets/asset/images/nha2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
          <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3">Phòng trọ khép kín phúc la</h1>
            <span class="location d-block mb-3"><i class="icon-my_location"></i> 19 Yên Bình, Yên Phúc, Hà Đông, Hà Nội, Việt Nam</span>
            <p>Nhà mình hiện có phòng khép kín tại tầng 3, diện tích 27 m2 trong khu nhà chung cư mini của gia đình cần cho thuê. Phòng mới xây nên rộng rãi, thoáng mát, sạch sẽ, có cầu thang máy, chỗ phơi đồ, để xe, camera an ninh, trang bị sẵn bình nóng lạnh và quạt trần. Điện, Nước có công tơ riêng. 📞Lh: </p>
            <span class="price">Giá: 2triệu500 ngàn/Tháng</span>
            <a href="chitiet" class="btn-custom p-3 px-4 bg-primary">Xem chi tiết <span class="icon-plus ml-1"></span></a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-search">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12 search-wrap">
						<h2 class="heading h5 d-flex align-items-center pr-4"><span class="ion-ios-search mr-3"></span> Tìm kiếm </h2>
						<form action="#" class="search-property">
	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Từ khóa</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Từ khóa">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Vị trí</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Tên thành phố/ Địa phương">
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
	                        <option value="">Căn hộ, chung cư</option>
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
    					<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro1.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Cho thuê phòng ngõ 139 nguyễn ngọc vũ, cầu giấy</a></h3>
				    						<p>🏡: Ngõ 139 Nguyễn Ngọc Vũ, Trung Hoà, Cầu Giấy, Hà Nội, Vietnam</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">2tr7<small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Cho thuê nhà riêng gần trung tâm hội nghị quốc gia</a></h3>
				    						<p>🏡: Cương Kiên, Nam Từ Liêm, Hà Nộit</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">5tr5 <small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Cho thuê homestay phòng nữ 3 người</a></h3>
				    						<p>Ngõ 509 Vũ Tông Phan, Khương Đình, Thanh Xuân, Hà Nội, Việt Nam</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">1tr7 <small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Nhà liền kề kđt xuân phương tasco - Xuân Phương</a></h3>
				    						<p>N06, Dịch Vọng, Cầu Giấy, Hà Nội, Việt Nam</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">7 triệu <small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro5.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Cho thuê nhà nguyên căn giá rẻ ( Có thương lượng)</a></h3>
				    						<p>Xuân Đỉnh, Bắc Từ Liêm, Hà Nội, Việt Nam</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">10 triệu <small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="chitiet" class="img d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/tro6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">Chính chủ cho thuê phòng CHO NỮ</a></h3>
				    						<p>n Dương Quảng Hàm, Quan Hoa, Cầu Giấy, Hà Nội, Việt Nam</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">3 triệu <small>/ tháng</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
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
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/properties-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
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
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/properties-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
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
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/properties-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status rent">Rent</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
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
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="chitiet" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets/asset/images/properties-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
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
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/asset/images/1.jpg');">
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
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/asset/images/2.jpg');">
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
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/asset/images/3.jpg');">
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
              <a href="blog-single.html" class="block-20" style="background-image: url('assets/asset/images/4.jpg');">
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
    