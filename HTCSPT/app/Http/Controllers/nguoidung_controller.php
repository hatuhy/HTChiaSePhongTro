<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\Auth;
class nguoidung_controller extends Controller
{
    //

    public function getDangNhap(){
        return view('Viewer.Page.dangnhap');
    }

    public function postDangNhap(Request $request){
        $this->validate($request,
        [
            'user'=>'required',
            'pass'=>'required',
        ],
        [
            'user.required'=>'Bạn chưa nhập tài khoản',
            'pass.required'=>'Bạn chưa nhập mật khẩu',
        ]);
        if(Auth::attempt(['email'=>$request->user,'password'=>$request->pass])){
            if(Auth::check()){
                if(Auth::user()->right==1)
                    return redirect('admin');
                else
                    return redirect('index');
            }
            
        }
        else
        {
            return redirect('dangnhap');
        }
    }

    public function postDangki(Request $request){

        $this->validate($request,
    		[
    			'name' => 'required|min:2|max:50|',
    			'Email'=>'required|email|unique:users,email',
    			'pass'=>'required|min:4|max:30',
    			'passagain'=>'required|same:pass',
    		],
    		[
    			'name.required'=>'Chưa nhập tên thể loại',
    			'name.min'=>'Độ dài tên thể loại phải từ 2->50',
    			'name.max'=>'Độ dài tên thể loại phải từ 2->50',
    			'Email.required'=>'Chưa nhập email',
    			'Email.email'=>'Nhập sai định dạng email',
    			'Email.unique'=>'Email đã tồn tại',
    			'pass.required'=>'Chưa nhập password',
    			'pass.min'=>'Độ dài password phải từ 4->30',
    			'pass.max'=>'Độ dài password phải từ 4->30',
    			'passagain.same'=>'Xác nhận mật khẩu sai',
    		]);
        $user = new users;
        $user->email = $request->Email;
        $user->password = bcrypt($request->pass);
        $user->name = $request->name;
        
        $user->save();
        return redirect('dangki')->with('thongbao','Đăng kí thành công');

    }
    public function getDangXuat(){
        Auth::logout();
        return redirect('index');
    }
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
        $nguoidung->status =$request->TinhTrang;
        $nguoidung->save();
        return redirect('admin/nguoidung/change_user/'.$id)->with('thongbao','Sửa Thành Công');
    }
}
