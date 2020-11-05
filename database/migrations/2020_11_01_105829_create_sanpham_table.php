<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->string('masanpham')->primary();
            $table->string('tensanpham');
            $table->string('loaisanpham');
            $table->string('bonho');
            $table->string('hedieuhanh');
            $table->string('manhinh');
            $table->string('camera');
            $table->string('ketnoi');
            $table->string('trongluong');
            $table->string('pin');
            $table->string('hinh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
