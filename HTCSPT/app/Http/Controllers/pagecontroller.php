<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pagecontroller extends Controller
{
    //
    function getdangnhap(){
        return view('login');
    }
    public function postdangnhap(Request $request)
    {
    	if(Auth::attempt(['email'=>$request->username,'password'=>$request->pass]))
    		return redirect('index'); 
    }
}
