<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;
class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.customer.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,
        [
            'hoten'=>'bail|required',
            'sodienthoai'=>'bail|min:10|max:15|required|unique:khachhang',
            'ngaysinh'=>'bail|required',
            'cmnd'=>'bail|required|min:9|max:13|unique:khachhang,chungminhnhandan',
            'email'=>'bail|required|unique:khachhang',
            'matkhau'=>'bail|required',
            'xacnhanmatkhau'=>'bail|required',
            'diachi'=>'bail|required'
        ],
        [
            'hoten.required'=>'Họ tên không được để trống',
            'sodienthoai.required'=>'Số điện thoại không được để trống',
            'sodienthoai.min'=>'Số điện thoại không được ít hơn 9 và nhiều hơn 15 kí tự',
            'sodienthoai.max'=>'Số điện thoại không được ít hơn 9 và nhiều hơn 15 kí tự',
            'sodienthoai.unique'=>'Số điện thoại không được trùng',
            'cmnd.required'=>'Chứng minh nhân dân không được để trống',
            'cmnd.min'=>'Chứng minh nhân dân không được ít hơn 9 kí tự và nhiều hơn 13 kí tự',
            'cmnd.max'=>'Chứng minh nhân dân không được ít hơn 9 kí tự và nhiều hơn 13 kí tự',
            'cmnd.unique'=>'Chứng minh nhân dân không được bỏ trống',
            'email.required'=>'Email không được bỏ trống',
            'email.unique'=>'Email không được trùng',
            'matkhau.required'=>'Mật khẩu không được bỏ trống',
            'xacnhanmatkhau.required'=>'Mật khẩu xác nhận không được để trống',
            'diachi.required'=>'Địa chỉ không được bỏ trống'
        ]);
         if($request->matkhau!=$request->xacnhanmatkhau){
             return redirect('frontend/dangky')->with('thongbao',"Mật khẩu xác nhận phải trùng với mật khẩu");
         }   
         
         $khachhang=new KhachHang();
         $khachhang->chungminhnhandan=$request->cmnd;
         $khachhang->tenkhachhang=$request->hoten;
         $khachhang->sodienthoai=$request->sodienthoai;
         $khachhang->ngaysinh=$request->ngaysinh;
         $khachhang->gioitinh=$request->gioitinh;
         $khachhang->diachi=$request->diachi;
         $khachhang->email=$request->email;
         $khachhang->password=$request->matkhau;
         $khachhang->save();
         return redirect('frontend/dangnhap')->with('thongbao','Đăng ký thành công vui lòng đăng nhập');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $khachhang=KhachHang::find($id);
        return view('frontend.customer.edit',['kh'=>$khachhang]);
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
    public function formdangnhap(){
        return view('frontend.customer.login');
    }

    public function dangnhap(Request $request){
        $this->validate($request,
        [
            'email'=>'bail|required',
            'password'=>'bail|required'
        ],
        [
            'email.required'=>'Email không được để trống',
            'password.required'=>'Password không được để trống'
        ]);
        $khachhang=KhachHang::all();
        foreach($khachhang as $item){
            if($item->email==$request->email && $item->password==$request->password){
                return redirect()->action('SanPhamController@ShowProduct',['thongbao'=>true,'cmnd'=>$item->chungminhnhandan,'ten'=>$item->tenkhachhang]);
            }
        }
        return redirect('frontend/dangnhap')->with('thongbao','Email hoặc Password sai');
    }

    

}
