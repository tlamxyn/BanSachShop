<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoadonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function (Blueprint $table) {
            $table->increments('MaHD');
            $table->integer('MaKH')->unsigned();
            $table->string('TongTien');
            $table->string('Trangthai');
            $table->string('Giamgia');
            $table->string('TenKH');
            $table->string('Diachigiaohang');
            $table->string('Phuongthucthanhtoan');
            $table->string('Sodienthoai');
            $table->string('MaNV');
            $table->timestamps();
        });
        Schema::table('chitiethd', function (Blueprint $table) {
            $table->foreign('MaHD')->references('MaHD')->on('hoadon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadon');
    }
}
