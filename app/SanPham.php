<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $primaryKey='masanpham';
    protected $keyType='String';

    //get list discount product
    public static function getdiscount(){
         return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','discount','Money_discount')->get();        
    }
    //san pham moi
    public static function getNewProduct(){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->orderByDesc('created_at')->select('sanpham.masanpham','sanpham.tensanpham','sanpham.giaban','sanpham.hinh','sanpham.created_at','discount','Money_discount')->limit(10)->get();
    }

    //get detail product discount
    public static function getDetailProduct($ma){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.masanpham','=',$ma)->select('sanpham.*','discount.Money_discount','discount.discount')->get();
    }

    //get detail product
    public static function getDetailProductDefault($ma){
        $khachhang= DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.masanpham','=',$ma)->select('sanpham.*','discount.Money_discount','discount.discount')->get();
        return $khachhang;
    }

    public static function getMauSac($name){
        return DB::table('sanpham')->where('sanpham.tensanpham','=',$name)->get();
    }
}
