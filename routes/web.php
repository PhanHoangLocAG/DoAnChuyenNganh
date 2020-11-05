<?php

use App\Http\Controllers\NhanVienController;
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

    //Nhan Vien
    Route::group(['prefix'=>'nhanvien'],function(){

        Route::get('them','NhanVienController@create');
        Route::post('them','NhanVienController@store');
        Route::get('xoa/{ma}','NhanVienController@destroy');
        Route::get('sua/{ma}','NhanVienController@edit');
        Route::post('sua/{ma}','NhanVienController@update');
        Route::get('danhsach','NhanVienController@index');
    });

    //Sản phẩm
    Route::group(['prefix'=>'sanpham'],function(){
        
        Route::get('them','SanPhamController@create');
        Route::post('them','SanPhamController@store');
        Route::get('xoa/{ma}','SanPhamController@destroy');
        Route::get('sua/{ma}','SanPhamController@edit');
        Route::post('sua/{ma}','SanPhamController@update');
        Route::get('danhsach','SanPhamController@index');

    });

    //khach hang
    Route::group(['prefix'=>'khachhang'],function(){
        
        Route::get('danhsach',function(){
            return view('admin.khachhang.danhsach');
        });
    });

    //chuc vu
    Route::group(['prefix'=>'chucvu'],function(){
        Route::get('them','ChucVuController@create');
        Route::post('them','ChucVuController@store');
        Route::get('xoa/{ma}','ChucVuController@destroy');
        Route::get('sua/{ma}','ChucVuController@edit');
        Route::post('sua/{ma}','ChucVuController@update');
        Route::get('danhsach','ChucVuController@index');
    });

    //luong
    Route::group(['prefix'=>'luong'],function(){
        Route::get('them','LuongController@create');
        Route::post('them','LuongController@store');
        Route::get('xoa/{ma}','LuongController@destroy');
        Route::get('sua/{ma}','LuongController@edit');
        Route::post('sua/{ma}','LuongController@update');
        Route::get('danhsach','LuongController@index');
    });
});


Route::group(['prefix'=>'frontend'],function(){
    Route::get('index',function(){
        return view('frontend.layouts.index');
    });

    Route::get('trangchu',function(){
        return view('frontend.sanpham.product');
    });

});