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

    //get detail product discount
    public static function getDetailProduct($ma){
        return DB::table('sanpham')->leftjoin('discount','sanpham.masanpham','=','discount.masanpham')->where('sanpham.masanpham','=',$ma)->select('sanpham.*','discount.Money_discount','discount.discount')->get();
    }
}
