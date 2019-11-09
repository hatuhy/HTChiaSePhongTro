<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('dangnhap','nguoidung_controller@getDangNhap');

Route::post('dangnhap','nguoidung_controller@postDangNhap');

Route::get('dangxuat','nguoidung_controller@getDangXuat');
Route::get('index','phongtro_controller@getIndex');
Route::get('danhsach','phongtro_controller@getDanhSach');

Route::group(['prefix'=>'/','middleware'=>'userLogin'],function(){
    Route::get('dangtin','phongtro_controller@getDangTin');
    Route::post('dangtin','phongtro_controller@postDangTin');
    Route::get('quanlytin','phongtro_controller@getQuanLyTin');
    Route::get('suatin/{id}','phongtro_controller@getSuaTin')->name('suatin');
    Route::post('suatin/{id}','phongtro_controller@postSuaTin')->name('suatin');
    Route::get('xoatin/{id}','phongtro_controller@getXoaTin')->name('xoatin');
});


Route::get('dsblog',function(){
    return view('Viewer.Page.dsblog');
});
Route::get('lienhe',function(){
    return view('Viewer.Page.lienhe');
});

Route::get('abouts',function(){
    return view('Viewer.Page.about');
});

/* Route::get('chitiet',function(){
    return view('Viewer.Page.chitiet');
}); */
Route::get('s/{id}','phongtro_controller@getChiTiet')->name('chitiet');
Route::get('ctblog',function(){
    return view('Viewer.Page.ctblog');
});

 Route::get('danhmuc',function(){
     return view('Admin.Page.category.danhmuc');
});
Route::get('nguoidung',function(){
    return view('Admin.Page.user.nguoidung');
});
Route::get('timkiem','phongtro_controller@timkiem')->name('tim-kiem');

Route::get('dangki',function(){
    return view('Viewer.Page.dangki');
});


Route::post('dangki','nguoidung_controller@postDangki')->name('post-dangki');
Route::get('phattrien',function(){
    return view('Admin.Page.phattrien');
});
Route::get('admin',function(){
    return view('Admin.Page.index');
});
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'danhmuc'],function(){
        Route::get('danhsach','danhmuc_controller@getDanhSach');
        Route::get('xoa/{id}','danhmuc_controller@xoaDanhMuc')-> name('xoadanhmuc');
        Route::get('suadanhmuc/{id}','danhmuc_controller@getSuaDanhMuc')->name('suadm');
        Route::post('suadanhmuc/{id}','danhmuc_controller@postSuaDanhMuc')-> name('suadanhmuc');
        Route::get('themdanhmuc','danhmuc_controller@getThemDanhMuc')->name('themdm');
        Route::post('themdanhmuc','danhmuc_controller@postThemDanhMuc')-> name('themdanhmuc');      
    });

    Route::group(['prefix'=>'nguoidung'],function(){
        Route::get('danhsach','nguoidung_controller@getDanhSach');
        Route::get('change_user/{id}','nguoidung_controller@getChangeUser')->name('suand');
        Route::post('change_user/{id}','nguoidung_controller@postChangeUser')-> name('suanguoidung');
    }); 
    Route::group(['prefix'=>'phongtro'],function(){
        Route::get('danhsach','phongtro_controller@getDanhSachChiTiet');
       /*  Route::get('danhsachchitiet','phongtro_controller@getDanhSachChiTiet'); */
        Route::get('xoa/{id}','phongtro_controller@xoaBaiDang')-> name('xoabaidang');
    }); 
    Route::group(['prefix'=>'phongtrochuakiemduyet'],function(){
        Route::get('danhsach','phongtro_controller@getDanhSachCKD');
        Route::get('kiemduyet/{id}','phongtro_controller@postKiemDuyet')-> name('kiemduyet');
    }); 
    Route::group(['prefix'=>'report'],function(){
        Route::get('post_report','report_controller@getDanhSach');
        Route::get('sent_noti/{id}','report_controller@getThongBao');
        Route::post('sent_noti/{id}','report_controller@postThongBao');
    });
    Route::get('thongke','phongtro_controller@getThongKe');
    
});




