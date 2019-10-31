<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noti_user;
class notification_controller extends Controller
{
    //
    public function getMessage(){
        $mess = noti_user::where('status',0) ->get();
        return view('Admin.Page.index',['mess'=>$mess]);  
    }
}
