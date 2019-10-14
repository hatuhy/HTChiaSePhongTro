<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class nguoidung_controller extends Controller
{
    //
    public function getDanhSach(){
        $nguoidung = users::all();
        return view('Admin.Page.user.nguoidung',['nguoidungs'=>$nguoidung]);
    }
    public function getChangeUser($id){
        $nguoidung = users::find($id);
        return view('Admin.Page.user.change_user',['nguoidungs'=>$nguoidung]);
    }
    
    public function postChangeUser(Request $request,$id){
        $nguoidung = users::find($id);
        $nguoidung->right = $request ->Quyen;
        $nguoidung->tinhtrang =$request->TinhTrang;
        $nguoidung->save();
        return redirect('admin/nguoidung/change_user/'.$id)->with('thongbao','Sửa Thành Công');
    }
}
