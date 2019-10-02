<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('index',function(){
    return view('Viewer.Page.trangchu');
});
Route::get('trangchu',function(){
    return view('Viewer.Layout.index');
});
Route::get('dsblog',function(){
    return view('Viewer.Page.dsblog');
});
Route::get('lienhe',function(){
    return view('Viewer.Page.lienhe');
});
<<<<<<< HEAD
Route::get('admin1',function(){
    return view('Admin.index');
=======
Route::get('abouts',function(){
    return view('Viewer.Page.about');
});
Route::get('danhsach',function(){
    return view('Viewer.Page.danhsach');
});
Route::get('chitiet',function(){
    return view('Viewer.Page.chitiet');
});
Route::get('dangki',function(){
    return view('Viewer.Page.dangki');
>>>>>>> 7a473f4a807f7a194ed2cb41721a47d87facc23a
});