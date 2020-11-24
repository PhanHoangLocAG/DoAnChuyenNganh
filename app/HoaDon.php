<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HoaDon extends Model
{
    protected $table='hoadon';


    public static function getId($id){
        return DB::table('hoadon')->where('makhachhang','=',$id)->orderByDesc('created_at')->first();
    }
}
