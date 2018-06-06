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

Route::get('/',[
    'as'=>'trangchu',
    'uses'=>'PageController@gettrangchu'
]);
Route::get('mien-bac',[
    'as'=>'mienbac',
    'uses'=>'PageController@getmienbac'
]);
Route::get('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@getdangky'
]);
Route::post('dang-ky',[
    'as'=>'dangky',
    'uses'=>'PageController@postdangky'
]);
Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getdangnhap'
]);
Route::post('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@postdangnhap'
]);
Route::get('dang-xuat',[
    'as'=>'dangxuat',
    'uses'=>'PageController@getdangxuat'
]);
Route::get('ketqua',[
    'as'=>'ketqua',
    'uses'=>'PageController@getketqua'
]);
Route::post('ketqua',[
    'as'=>'ketqua',
    'uses'=>'PageController@postketqua'
]);
Route::get('kqxs',[
    'as'=>'kqxs',
    'uses'=>'PageController@getkqxs'
]);
Route::get('ketqua/ajax/dai/{thu}/{ngay}','AjaxController@getdai');
Route::get('kqxs/ajax/ketqua/{idcity}/{ngay}','AjaxController@getkqxs');
Route::get('ajax/city/{thu}','AjaxController@getcity');
Route::get('ajax/ketqua/{idcity}/{day}','AjaxController@getketqua');

Route::get('kqxs-ket-qua-xo-so-ngay-{date}',[
    'as'=>'ketquaxoso',
    'uses'=>'PageController@getketquaxoso'
]);
Route::get('gop-y',[
    'as'=>'gopy',
    'uses'=>'PageController@getgopy'
]);
Route::get('so-mo',[
    'as'=>'somo',
    'uses'=>'PageController@getsomo'
]);
Route::post('so-mo',[
    'as'=>'somo',
    'uses'=>'PageController@postsomo'
]);
Route::get('so-mo/{name}-{id}',[
    'as'=>'baivietsomo',
    'uses'=>'PageController@getbaivietsomo'
]);
Route::post('so-mo/{name}-{id}',[
    'as'=>'baivietsomo',
    'uses'=>'PageController@postbaivietsomo'
]);
Route::get('so-mo-so-de/bat-dau-bang-{text}',[
    'as'=>'batdaubang',
    'uses'=>'PageController@getbatdaubang'
]);
Route::post('so-mo-so-de/bat-dau-bang-{text}',[
    'as'=>'batdaubang',
    'uses'=>'PageController@postbatdaubang'
]);
Route::resource('somo','somoController');
// Route::get('xo-so-truc-tiep',[
//     'as'=>'tructiep',
//     'uses'=>'PageController@gettructiep'
// ]);
Route::get('xo-so-truc-tiep','AjaxController@geta');
Route::get('ajax/miennam','AjaxController@getructiepmn');
Route::get('ajax/mienbac','AjaxController@getructiepmb');
Route::get('ajax/mientrung','AjaxController@getructiepmt');
Route::get('kqxsmb',[
    'as'=>'kqxsmb',
    'uses'=>'kqxsmbController@getkqxsmb'
]);
Route::get('kqxsmb/thu-{thu}',[
    'as'=>'kqxsmbthu',
    'uses'=>'kqxsmbController@getkqxsmbthu'
]);
Route::get('kqxsmb/ngay-{ngay}',[
    'as'=>'kqxsmbngay',
    'uses'=>'kqxsmbController@getkqxsmbngay'
]);

Route::get('kqxsmn',[
    'as'=>'kqxsmn',
    'uses'=>'kqxsmnController@getkqxsmn'
]);
Route::get('kqxsmn/thu-{thu}',[
    'as'=>'kqxsmnthu',
    'uses'=>'kqxsmnController@getkqxsmnthu'
]);
Route::get('kqxsmn/ngay-{ngay}',[
    'as'=>'kqxsmnngay',
    'uses'=>'kqxsmnController@getkqxsmnngay'
]);