<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Cart;
class ChiTietHoaDon extends Model
{
    protected $table = 'chitiethoadon';

    public static function getData($id){
        $hoadon = DB::table('hoadon')->where('makhachhang','=',$id)->orderByDesc('created_at')->first();
        if($hoadon != null){
        $sanpham = DB::table('chitiethoadon')->where('mahoadon','=',$hoadon->mahoadon)->get();
        $tongtien = 0;
        foreach($sanpham as $item){
            $tongtien += $item->thanhtien;
        }
        if($hoadon->phuongthucgiaohang == 1){
            $tongtien += 30000;
        }
        $ob = array($hoadon,$sanpham,$tongtien);
        return $ob;
        }
        return null;
    }
    //xoa chi tiet hoa don co id hoa don
    
}
