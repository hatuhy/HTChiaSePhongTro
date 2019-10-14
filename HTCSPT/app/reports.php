<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reports extends Model
{
    //
    protected $table = 'reports';
    public function motelrooms(){
        return $this->belongsTo('App\motelrooms','id_motelroom','id');
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
    
}
