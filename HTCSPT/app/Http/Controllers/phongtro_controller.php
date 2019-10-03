<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\motelrooms;
class phongtro_controller extends Controller
{
    //
    public function getDanhSach(){
        $dspt = motelrooms::all();
        return view('Admin.Page.phongtro',['dspts'=>$dspt]);
        
    }
}
