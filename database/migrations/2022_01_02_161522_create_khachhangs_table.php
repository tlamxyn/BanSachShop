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
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->id('MAKH');
            $table->string('TaiKhoan');
            $table->string('Matkhau');
            $table->string('Diachi');
            $table->string('sodienthoai');
            $table->string('email');
            $table->string('avatar');
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
        Schema::dropIfExists('khachhangs');
    }
}
