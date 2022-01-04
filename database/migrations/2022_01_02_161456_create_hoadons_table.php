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
        Schema::create('hoadons', function (Blueprint $table) {
            $table->string('MaHD');
            $table->string('MaKH');
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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoadons');
    }
}
