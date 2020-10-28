<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//login
Route::get('login',function(){
    return view('admin.login');
});

Route::group(['prefix'=>'admin'],function(){


    //Loại sản phẩm
    Route::group(['prefix'=>'theloai'],function(){
        
       Route::get('them','TheLoaiController@create');
       Route::post('them','TheLoaiController@store');
       Route::get('danhsach','TheLoaiController@index');
       Route::get('xoa/{ma}','TheLoaiController@destroy');
       Route::get('sua/{ma}','TheLoaiController@edit');
       Route::post('sua/{ma}','TheLoaiController@update');
    });

    //Sản phẩm
    Route::group(['prefix'=>'sanpham'],function(){
        
        Route::get('danhsach',function(){
            return view('admin.sanpham.danhsach');
        });
        
        Route::get('sua',function(){
            return view('admin.sanpham.sua');
        });
        
        Route::get('them',function(){
            return view('admin.sanpham.them');
        });
    });

    //khach hang
    Route::group(['prefix'=>'khachhang'],function(){
        
        Route::get('danhsach',function(){
            return view('admin.khachhang.danhsach');
        });
    });
});