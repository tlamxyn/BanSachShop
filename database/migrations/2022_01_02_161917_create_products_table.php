<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('MaSP');
            $table->string('Ten');
            $table->string('Giaban');
            $table->string('SLtonkho');
            $table->string('Hinhanh');
            $table->string('Mota');
            $table->string('TacGia');
            $table->string('NxB');
            $table->integer('Theloai')->unsigned();
            $table->string('Trangthai');
            $table->timestamps();
        });
        Schema::table('chitiethd', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('sach');
        });
        Schema::table('chitietphieunhap', function (Blueprint $table) {
            $table->foreign('MaSP')->references('MaSP')->on('sach');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sach');
    }
}
