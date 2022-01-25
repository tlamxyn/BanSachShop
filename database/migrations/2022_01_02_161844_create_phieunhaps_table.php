<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieunhapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->increments('MaPN');
            $table->integer('MaNV')->unsigned();
            $table->integer('MaNCC')->unsigned();
            $table->string('Soluong');
            $table->string('Dongia');
            $table->timestamps();
        });
        Schema::table('chitietphieunhap', function (Blueprint $table) {
            $table->foreign('MaPN')->references('MaPN')->on('phieunhap');
        });
        Schema::table('phieunhap', function (Blueprint $table) {
            $table->foreign('MaNV')->references('MaNV')->on('nhanvien');
        });
        Schema::table('phieunhap', function (Blueprint $table) {
            $table->foreign('MaNCC')->references('MaNCC')->on('nhacungcap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
