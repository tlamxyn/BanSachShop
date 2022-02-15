<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('MaNV');
            $table->string('TaiKhoan');
            $table->string('password');
            $table->string('Diachi');
            $table->string('sodienthoai');
            $table->string('email');
            $table->string('avatar');
            $table->integer('MaCV')->unsigned();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('nhanvien', function (Blueprint $table) {
            $table->foreign('MaCV')->references('MaCV')->on('chucvu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
