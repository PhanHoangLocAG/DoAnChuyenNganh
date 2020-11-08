<?php

namespace App\Http\Controllers;

use App\SanPham;
use App\TheLoai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function KiemTraTrung($arr,$check){
        foreach($arr as $item){
            if($item->tensanpham==$check)
               {
                   return true;
               }
        }
        return false;
    }


    public function index()
    {
        $sanpham=SanPham::all();
        return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loaisanpham=TheLoai::all();
        return view('admin.sanpham.them',['loaisanpham'=>$loaisanpham]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'masanpham'=>'unique:sanpham|min:5|max:50|required',
            'tensanpham'=>'unique:sanpham|min:5|max:50|required',
            'bonho'=>'min:5|max:50|required',
            'hedieuhanh'=>'min:5|max:50|required',
            'manhinh'=>'min:5|max:50|required',
            'camera'=>'min:5|max:50|required',
            'ketnoi'=>'min:5|max:50|required',
            'trongluong'=>'min:5|max:50|required',
            'pin'=>'min:5|max:50|required',
            'hinhanh'=>'required',
            'gia'=>'required'
        ],
        [
            'masanpham.unique'=>'Mã sản phẩm không được trùng',
            'masanpham.min'=>'Mã sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'masanpham.max'=>'Mã sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'masanpham.required'=>'Mã sản phẩm không được để trống',
            'tensanpham.unique'=>'Tên sản phẩm không được trùng',
            'tensanpham.min'=>'Tên sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'tensanpham.max'=>'Tên sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'tensanpham.required'=>'Tên sản phẩm không được để trống',
            'bonho.min'=>'Bộ nhớ sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'bonho.max'=>'Bộ nhớ sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'bonho.required'=>'Bộ nhớ sản phẩm không được để trống',
            'hedieuhanh.min'=>'Hệ điều hành sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'hedieuhanh.max'=>'Hệ điều hành sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'hedieuhanh.required'=>'Hệ điều hành sản phẩm không được để trống',
            'manhinh.min'=>'Màn hình sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'manhinh.max'=>'Màn hình sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'manhinh.required'=>'Màn hình sản phẩm không được để trống',
            'camera.min'=>'Camera sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'camera.max'=>'Camera sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'camera.required'=>'Camera sản phẩm không được để trống',
            'ketnoi.min'=>'Kết nối không dây sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'ketnoi.max'=>'Kết nối không dây sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'ketnoi.required'=>'Kết nối không dây sản phẩm không được để trống',
            'trongluong.min'=>'Trọng lượng sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'trongluong.max'=>'Trọng lượng sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'trongluong.required'=>'Trọng lượng sản phẩm không được để trống',
            'pin.min'=>'Pin sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'pin.max'=>'Pin sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'pin.required'=>'Pin sản phẩm không được để trống',
            'hinhanh.required'=>'Hình sản phẩm không được để trống',
            'gia.required'=>'Giá sản phẩm không được bỏ trống'
        ]);
        $sanpham=new SanPham();
        $sanpham->masanpham=$request->masanpham;
        $sanpham->tensanpham=$request->tensanpham;
        $sanpham->loaisanpham=$request->loaisanpham;
        $sanpham->bonho=$request->bonho;
        $sanpham->hedieuhanh=$request->hedieuhanh;
        $sanpham->manhinh=$request->manhinh;
        $sanpham->camera=$request->camera;
        $sanpham->ketnoi=$request->ketnoi;
        $sanpham->trongluong=$request->trongluong;
        $sanpham->pin=$request->pin;
        $sanpham->giaban=$request->gia;
        if($request->hasFile('hinhanh')){
            $file=$request->file('hinhanh');
            $name=$file->getClientOriginalName();
            $hinh=time()."_".$name;
            $file->move('upload/img',$hinh);
            $sanpham->hinh=$hinh;
        }else{
            $sanpham->hinh="";
        }
        $sanpham->save();
        return redirect('admin/sanpham/them')->with('thongbao','Thêm thành công một sản phẩm mới');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function show($id)
    {
        $sanpham=SanPham::getDetailProduct($id);
        return view('frontend.sanpham.detailProduct',['sanpham'=>$sanpham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loaisanpham=TheLoai::all();
        $sanpham=SanPham::find($id);
        return view('admin.sanpham.sua',['sanpham'=>$sanpham,'loaisanpham'=>$loaisanpham]);
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
        $this->validate($request,
        [
            'tensanpham'=>'min:5|max:50|required',
            'bonho'=>'min:5|max:50|required',
            'hedieuhanh'=>'min:5|max:50|required',
            'manhinh'=>'min:5|max:50|required',
            'camera'=>'min:5|max:50|required',
            'ketnoi'=>'min:5|max:50|required',
            'trongluong'=>'min:5|max:50|required',
            'pin'=>'min:5|max:50|required',
        ],
        [
            'tensanpham.min'=>'Tên sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'tensanpham.max'=>'Tên sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'tensanpham.required'=>'Tên sản phẩm không được để trống',
            'bonho.min'=>'Bộ nhớ sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'bonho.max'=>'Bộ nhớ sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'bonho.required'=>'Bộ nhớ sản phẩm không được để trống',
            'hedieuhanh.min'=>'Hệ điều hành sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'hedieuhanh.max'=>'Hệ điều hành sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'hedieuhanh.required'=>'Hệ điều hành sản phẩm không được để trống',
            'manhinh.min'=>'Màn hình sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'manhinh.max'=>'Màn hình sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'manhinh.required'=>'Màn hình sản phẩm không được để trống',
            'camera.min'=>'Camera sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'camera.max'=>'Camera sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'camera.required'=>'Camera sản phẩm không được để trống',
            'ketnoi.min'=>'Kết nối không dây sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'ketnoi.max'=>'Kết nối không dây sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'ketnoi.required'=>'Kết nối không dây sản phẩm không được để trống',
            'trongluong.min'=>'Trọng lượng sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'trongluong.max'=>'Trọng lượng sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'trongluong.required'=>'Trọng lượng sản phẩm không được để trống',
            'pin.min'=>'Pin sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'pin.max'=>'Pin sản phẩm không được bé hơn 5 kí tự và lớn hơn 50 kí tự',
            'pin.required'=>'Pin sản phẩm không được để trống'
        ]);
        $sanpham=SanPham::find($id);
        $temp=DB::table('sanpham')->where('tensanpham','<>',$sanpham->tensanpham)->get();
        $kiemtra=$this->KiemTraTrung($temp,$request->tensanpham);
        if($kiemtra){
            return redirect('admin/sanpham/sua/'.$id)->with('error','Tên sản phẩm không được trùng');
        }
        $sanpham->tensanpham=$request->tensanpham;
        $sanpham->loaisanpham=$request->loaisanpham;
        $sanpham->bonho=$request->bonho;
        $sanpham->hedieuhanh=$request->hedieuhanh;
        $sanpham->manhinh=$request->manhinh;
        $sanpham->camera=$request->camera;
        $sanpham->ketnoi=$request->ketnoi;
        $sanpham->trongluong=$request->trongluong;
        $sanpham->pin=$request->pin;
        if($request->hasFile('hinhanh')){
            $file=$request->file('hinhanh');
            $name=$file->getClientOriginalName();
            $hinh=time()."_".$name;
            $file->move('upload/img',$hinh);
            $sanpham->hinh=$hinh;
        }
        $sanpham->save();
        return redirect('admin/sanpham/sua/'.$id)->with('thongbao','Sửa thành công một sản phẩm mới');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham=SanPham::find($id);
        $sanpham->delete();
        return redirect('admin/sanpham/danhsach')->with('thongbao','Xóa thành công một sản phẩm');
    }

    //Show product for customer
    public function ShowProduct()
    {
        $sanpham =SanPham::getdiscount();
        $new=DB::table('sanpham')->orderBy('created_at','desc')->limit(10)->get();

        return view('frontend.sanpham.product',['sanpham'=>$sanpham,'newProduct'=>$new]);
    }
}
