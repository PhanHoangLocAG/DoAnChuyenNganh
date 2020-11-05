<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $primaryKey='masanpham';
    protected $keyType='String';
}
