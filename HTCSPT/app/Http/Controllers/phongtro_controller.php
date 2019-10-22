<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\motelrooms;
use App\users;
use App\districts;
use App\categories;
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
       $room->category_id = $request->KieuNha;
       $room->description = $request->MieuTa;
       $room->price = $request->Gia;
       $room->area = $request->DienTich;
       $room->images= $request->file('Anh')->getClientOriginalName();
       $room->phone = $request->SDT;
       $room->district_id=$request->Quan;
       $room->address= $request->DiaChi;
       $room->save();
       return redirect('dangtin/')->with('thongbao','Đăng Thành Công');
    }
    public function getIndex(Request $request){
        $phongtro = motelrooms::where('id','<',6) ->get();
        $districts = districts::all();
        $loaiphongs = categories::all();
        return view('Viewer.Page.trangchu',['list_district'=>$districts,'loaiphongs'=>$loaiphongs,'phongtros'=>$phongtro]);

    }
    public function timkiem(Request $request){
    	$phongtros = motelrooms::where('title','like','%'.$request->tieude.'%')->where('district_id',$request->vitri)->where('category_id',$request->loaiphong)->get();
    	$list_district = districts::all();
    	$loaiphongs = categories::all();
    	return view('Viewer.Page.timkiem',['phongtros'=>$phongtros,'list_district'=>$list_district,'loaiphongs'=>$loaiphongs]);
    }
    public function getDanhSachChiTiet(){
        $dspt = motelrooms::where('approve',1) ->get();
        return view('Admin.Page.room.room',['dspts'=>$dspt]);  
    }
    
}