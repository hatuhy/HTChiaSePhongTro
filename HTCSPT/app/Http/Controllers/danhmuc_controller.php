<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
class danhmuc_controller extends Controller
{
    public function getDanhSach(){
        $categorie = categories::all();
        return view('Admin.Page.danhmuc',['danhmucs'=>$categorie]);
        
    }
}
