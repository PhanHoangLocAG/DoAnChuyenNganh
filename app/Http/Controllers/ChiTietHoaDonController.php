<?php

namespace App\Http\Controllers;

use App\HoaDon;
use App\KhachHang;
use App\TheLoai;
use Illuminate\Http\Request;

class ChiTietHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $branch=TheLoai::all(); 
        $khachhang=KhachHang::find($id);

        $Cart = Session('Cart') ? Session('Cart') : null ;
        return view('frontend.giohang.bill',['branch'=>$branch,'khachhang' => $khachhang, 'cart' => $Cart]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request,[
            'ten' => 'bail|required',
            'diachi' => 'bail|required',
            'email' => 'bail|required',
            'sodienthoai' => 'bail|required'
        ],[
            'ten.required' => 'Tên không được bỏ trống',
            'diachi.required' => 'Địa chỉ không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'sodienthoai.required' => 'Số điện thoại không được bỏ trống'
        ]);
        $hoadon = new HoaDon();
        $hoadon->makhachhang = $id;
        $hoadon->manhanvien = 'admin';
        $hoadon->tenkhachhang = $request->ten;
        $hoadon->diachi = $request->diachi;
        $hoadon->sodienthoai = $request->sodienthoai;
        $hoadon->email = $request->email;
        $hoadon->save();
        
        $hoadon_id =HoaDon::getId($id);
        
        
        

        dd($request,$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req, $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
