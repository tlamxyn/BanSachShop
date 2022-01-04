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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('MaSP');
            $table->string('Ten');
            $table->string('TongTien');
            $table->string('Giaban');
            $table->string('SLtonkho');
            $table->string('Hinhanh');
            $table->string('Mota');
            $table->string('TacGia');
            $table->string('NXB');
            $table->string('Theloai');
            $table->string(' Trangthai');
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
        Schema::dropIfExists('products');
    }
}
