<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reports;
class report_controller extends Controller
{
    public function getDanhSach(){
        $list_rp = reports::all();
        return view('Admin.Page.report.post_reported',['list_rp'=>$list_rp]);  
    }
}
