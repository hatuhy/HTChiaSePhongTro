<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
class nguoidung_controller extends Controller
{
    //
    public function getDanhSach(){
        $nguoidung = users::all();
        return view('Admin.Page.nguoidung',['nguoidungs'=>$nguoidung]);
    }
}
