<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->increments('MAKH');
            $table->string('Taikhoan');
            $table->string('password');
            $table->string('Diachi');
            $table->string('Sodienthoai');
            $table->string('Email');
            $table->string('Avatar');
            $table->timestamps();
        });
        Schema::table('hoadon', function (Blueprint $table) {
            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
