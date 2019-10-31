<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reports;
use App\motelrooms;
use App\noti_user;
class report_controller extends Controller
{
    public function getDanhSach(){
        $list_rp = reports::where('role',1) ->get();
        return view('Admin.Page.report.post_reported',['list_rp'=>$list_rp]);  
    }
    public function getThongBao(){
        return view('Admin.Page.report.post_reported',['list_rp'=>$list_rp]);
    }
    public function postThongBao(Request $request,$id){
        $noti_user = new noti_user;
        $report = reports::find($id);
        $report->role = 0;
        $room = motelrooms::find($report->id_motelroom);
        $noti_user->id_user = $room->user_id;
        
        $noti_user->id_report =$report->id;
        if($report->status==0)
         $noti_user->id_notification = 2;
          else  if($report->status==1)
            $noti_user->id_notification= 1;
            else if($report->status==2)
            $noti_user->id_notification= 3;
        $report->save();
        $noti_user->save(); 
        return redirect('admin/report/post_report/')->with('thongbao','Gửi Tin Thành Công');
    }
}
