<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\motelrooms;
use App\users;
use App\districts;
use App\categories;
use App\reports;
class phongtro_controller extends Controller
{
    //
    public function getDanhSachDKD(){
        $dspt = motelrooms::where('approve',1) ->get();
        return view('Admin.Page.room.phongtro',['dspts'=>$dspt]);  
    }
    public function getDanhSachCKD(){
        $dsptckd = motelrooms::where('approve',0) ->get();
        return view('Admin.Page.room.list_room_uncheck',['dsptckds'=>$dsptckd]);
    }

    public function postKiemDuyet(Request $request,$id){
        $ptckd = motelrooms::find($id);
        $ptckd->approve = 1;
        $ptckd->save();
        return redirect()->back();
    }
    public function xoaBaiDang($id){
        $post = motelrooms::find($id);
        $post->delete();
        return redirect('admin/phongtro/danhsach')->with('thongbao','Xóa Thành Công');;
    }
    public function getDangTin(){
        $loaiphongs = categories::all();
         $list_district = districts::all();
        return view('Viewer.Page.dangtin',['list_district'=>$list_district,'loaiphongs'=>$loaiphongs]);

    }
    public function postDangTin(Request $request){
        $room = new motelrooms;
        $room->title = $request->TieuDe;
        $room->form = $request->HinhThuc;
        $room->category_id = $request->KieuNha;
        $room->description = $request->MieuTa;
        $room->price = $request->Gia;
        $room->area = $request->DienTich;
        
        if($request->hasFile('Anh'))
        {
         $room->images= $request->file('Anh')->getClientOriginalName();
         $request->file('Anh')->move('assets/asset/images',$room->images);
        }
        else
        {
             return redirect('dangtin/')->with('thongbao','Ảnh không được để trống');          
        }
        $room->phone = $request->SDT;
        $room->district_id=$request->Quan;
        $room->address= $request->DiaChi;
        $room->user_id = Auth::user()->id;
        $room->save();
        return redirect('dangtin/')->with('thongbao','Đăng Thành Công');
    }
    public function getSuaTin($id)
    {  
      $list_district = districts::all();
      $loaiphongs = categories::all();
      $suatin = motelrooms::where('id',$id)->get();
      $diadiem = districts::where('id',$id)->get();
      $kieuch = categories::where('id',$id)->get();

      return view('Viewer.Page.suatin',compact(['suatin','diadiem','kieuch','id','loaiphongs','list_district']));
    }
    public function postSuaTin( Request $request,$id)
    {
      $suatin = motelrooms::find($id);   
      $suatin->title = $request->TieuDe;
      $room->form = $request->HinhThuc;
      $suatin->category_id = $request->KieuNha;
      $suatin->description = $request->MieuTa;
      $suatin->price = $request->Gia;
      $suatin->area = $request->DienTich;
     
      if($request->hasFile('Anh'))
       {
        $suatin->images= $request->file('Anh')->getClientOriginalName();
        $request->file('Anh')->move('assets/asset/images',$suatin->images);
       }
       else
       {
        return redirect('suatin/{id}')->with('thongbao','Ảnh không được để trống');          
       }
      $suatin->phone = $request->SDT;
      $suatin->district_id=$request->quan;
      $suatin->address= $request->DiaChi;
      $suatin->user_id = Auth::user()->id;
      $suatin->changes = $suatin->changes + 1 ;
      $suatin->save();
      return redirect('quanlytin')->with('thongbao','Sửa thành công');
    }
    public function getIndex(Request $request){
        $phongtro = motelrooms::orderBy('id','DESC')->where('approve',1) ->paginate(8,['*'], 'page1');;
        $phongtroBTL = motelrooms::orderBy('id','DESC')->where('district_id',14)->where('approve',1) ->paginate(8,['*'], 'page2');;
        $districts = districts::all();
        $loaiphongs = categories::all();
        return view('Viewer.Page.trangchu',['list_district'=>$districts,'phongtroBTL'=>$phongtroBTL,'loaiphongs'=>$loaiphongs,'phongtros'=>$phongtro]);

    }
    public function getDanhSach(Request $request){
        $districts = districts::all();
        $loaiphongs = categories::all();
        $dschungcu = motelrooms::orderBy('id','DESC')->where('category_id','=',2)->where('approve',1)->get();
        $dsphongtro = motelrooms::orderBy('id','DESC')->where('category_id','=',1)->where('approve',1)->get();
        $dsnhanc = motelrooms::orderBy('id','DESC')->where('category_id','=',3)->where('approve',1)->get();
        $dsktx = motelrooms::orderBy('id','DESC')->where('category_id','=',4)->where('approve',1)->get();
        $dshomestay = motelrooms::orderBy('id','DESC')->where('category_id','=',5)->where('approve',1)->get();
        return view('Viewer.Page.danhsach',['list_district'=>$districts,'loaiphongs'=>$loaiphongs,
        'dschungcu'=>$dschungcu,'dsphongtro'=>$dsphongtro,'dsnhanc'=>$dsnhanc,
        'dsktx'=>$dsktx,'dshomestay'=>$dshomestay]);
    }

    public function getDanhSachPT(Request $request){
        $loaiphongs = categories::all();
        $pt = motelrooms::orderBy('id','DESC')->where('$phongtro->categories->name','=','Phòng trọ')->where('approve',1);
        return view('Viewer.Page.danhsach',['pt'=>$pt]);
    }

    public function timkiem(Request $request){
    	$phongtros = motelrooms::where('title','like','%'.$request->tieude.'%')->where('district_id',$request->vitri)->where('category_id',$request->loaiphong)->get();
    	$list_district = districts::all();
    	$loaiphongs = categories::all();
    	return view('Viewer.Page.timkiem',['phongtros'=>$phongtros,'list_district'=>$list_district,'loaiphongs'=>$loaiphongs]);
    }
    public function getDanhSachChiTiet(){
        $dspt = motelrooms::orderBy('id','DESC')->where('approve',1) ->get();
        return view('Admin.Page.room.room',['dspts'=>$dspt]);  
    }

    public function getChiTiet(Request $request){
        $pt = motelrooms::where('id',$request->id)->first();
        $phongtroBTL = motelrooms::orderBy('id','DESC')->where('district_id',14)->where('approve',1)->take(2)->get();
        return view('Viewer.Page.chitiet',compact('pt','phongtroBTL'));
    }
    public function getThongKe(){
        $dspt = motelrooms::all();
        $sopt = count($dspt);
        $soptcdk = count(motelrooms::where('approve',0) ->get());
        $sobc = count(reports::where('role',1) ->get());
        $sond = count(users::all());
        $sondchd = count(users::where('status','=',1)->get());
        $tilend =(float)($sondchd / $sond )*100 ;
        return view('Admin.Page.thongke',['soptcdk'=>$soptcdk,'sond'=>$sond,'sobc'=>$sobc,'sondchd'=>$sondchd,'sopt'=>$sopt,'tilend'=>$tilend]);
    }

    public function getQuanLyTin(){
            $qltin = motelrooms::where('user_id',Auth::user()->id)->get();
            return view('Viewer.Page.quanlytin',compact('qltin'));
    }
    public function getXoaTin($id)
    {
      $suatin = motelrooms::find($id);    
      $diadiem = districts::find($id);
      $kieuch = categories::find($id);  
      $suatin->delete();   
      return redirect('quanlytin');
    }
}
