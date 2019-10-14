<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class danhmuc_controller extends Controller
{
    public function getDanhSach(){
        $categorie = categories::all();
        return view('Admin.Page.category.danhmuc',['danhmucs'=>$categorie]);
        
    }
    public function xoaDanhMuc($id){
        $danhmuc = categories::find($id);
        $danhmuc->delete();
        return redirect('admin/danhmuc/danhsach')->with('thongbao','Xóa Thành Công');;
    }
    public function getSuaDanhMuc($id){
        $danhmuc = categories::find($id);
        return view('Admin.Page.category.change_danhmuc',['danhmuc'=>$danhmuc]);
    }
    
    public function postSuaDanhMuc(Request $request,$id){
        $danhmuc = categories::find($id);
        $danhmuc->name = $request ->TenDanhMuc;
        $danhmuc->save();
        return redirect('admin/danhmuc/suadanhmuc/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function getThemDanhMuc(){
        return view('Admin.Page.category.add_danhmuc');
    }
    
    public function postThemDanhMuc(Request $request){
        $danhmuc = new categories;
        $danhmuc->name = $request ->TenDanhMuc;
        $danhmuc->save();
        return redirect('admin/danhmuc/themdanhmuc/')->with('thongbao','Thêm Thành Công');
    }
    
}
