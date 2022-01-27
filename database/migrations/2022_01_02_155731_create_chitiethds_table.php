<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChitiethdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitiethd', function (Blueprint $table) {
            $table->integer('MaHD')->unsigned();                   
            $table->integer('MaSP')->unsigned();
            $table->string('Soluong');
            $table->string('Dongia');
            $table->timestamps();
            $table->primary(['MaHD', 'MaSP']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitiethd');
    }
}
