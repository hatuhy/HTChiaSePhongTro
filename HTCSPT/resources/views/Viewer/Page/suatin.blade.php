@extends('Viewer.Layout.index')
@section('title')
<title>Sửa bài đăng</title>
@endsection

    @section('content')
    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
	
</head>

   
<body>
	<div class="container">		 
 		<div class="panel-heading"  align="center"> <h2><b>Đăng tin</b></h2></div>   
		@if(session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
			<form action="dangtin" method="POST" enctype="multipart/form-data">
               @CSRF
               	<div class="form-group">
					<label for="titles">Tiêu đề</label>
					<input type="text" class="form-text form-control" name="TieuDe" placeholder="Nhập tiêu đề tin đăng">
				</div>
				<div class="form-group">
				<label for="titles">Thể loại (Tìm phòng, Cho thuê...)</label>
				<select name="HinhThuc" class="custom-select">
						
                          <option value="0">Cho Thuê</option>
						  <option value="1">Tìm Phòng</option>
						  <option value="2">Ở Ghép</option>

				</select>
				<label for="titles">Kiểu Nhà (Nhà Trọ, Căn Hộ...)</label>
				<select name="KieuNha" class="custom-select">
						
					 @foreach($loaiphongs as $loaiphong)
                          <option value="{{$loaiphong->id}}">{{$loaiphong->name}}</option>
                          @endforeach
				</select>
			    </div>
				<div class="form-group">
				<label for="mota">Mô tả</label>
				<textarea id="mota" name="MieuTa" class="form-control">
					
				</textarea>
				</div>
				<div class="form-group">
				<label for="gia">Giá</label>
				<input type="text" class="form-text form-control" id="gia" name="Gia" placeholder="Ví dụ: 500.000">
				</div>
				<div class="form-group">
				<label for="dientich">Diện Tích</label>
				<input type="text" class="form-text form-control" id="dientich" name="DienTich" placeholder="Nhập diện tích (m2)">
				</div>
				<div class="form-group">
				<label for="img">Vui lòng chọn hình tin đăng rõ ràng, nên tải lên 3 đến 4 hình.
				</label>
				<input type="file" class="form-control-file mb-3" id="img" name="Anh">				
				</div>
				<div class="form-group">
				<label for="hoten">Tên Liên Hệ</label>
				<input type="text" class="form-text form-control" id="hoten" placeholder="Ví dụ: Phạm Thị Dung">
				</div>
				<div class="form-group">
				<label for="phone">Số Điện Thoại Liên Hệ</label>
				<input type="text" class="form-text form-control" id="phone"  name="SDT" placeholder="Ví dụ : 0376521198">
				</div>
				<span>Vui lòng chọn địa chỉ chính xác, gõ vào ô địa chỉ và chọn đúng địa chỉ được đề xuất.</span>
				<div class="form-group">
				<label for="tinh">Tỉnh/Thành Phố</label>			
				<select name="" class="custom-select" id="tinh">
					
					<option value="1">Hà Nội </option>
					
				</select>

				</div>
				<div class="form-group">
				<label for="tinh">Quận</label>			
				<select class="custom-select" id="tinh" name="Quan">
						 @foreach($list_district as $quan)
                          <option value="{{$quan->id}}">{{$quan->name}}</option>
                          @endforeach
				</select>

				</div>
				<div class="form-group">
				<label for="diachi">Địa Chỉ</label>	
				<input type="text"class="form-text form-control" id="diachi" name="DiaChi" placeholder="">						
				</div>
				<span>Bằng việc tiếp tục đăng tin nghĩa là bạn đã đồng ý với điều kiện và điều khoản sử dụng của chúng tôi. <a href="#">Điều kiện & Điều khoản</a></span>
				<div class="form-group mt-3 ml-5">
					<button type="reset" class="btn btn-outline-light text-dark mr-3">Hủy</button>
					<button type="submit" class="btn btn-primary"> + Đồng ý</button>
				</div>
            </form>
	</div>
	<script>
		CKEDITOR.replace('mota');
	</script>
</body>
</html>
@endsection