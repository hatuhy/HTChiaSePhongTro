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
Route::get('admin1',function(){
    return view('Admin.index');
});