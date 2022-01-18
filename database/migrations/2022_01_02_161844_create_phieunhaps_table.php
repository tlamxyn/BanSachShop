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
        Schema::create('phieunhaps', function (Blueprint $table) {
            $table->integer('MaPN')->unsigned();
            $table->integer('MaNV')->unsigned();
            $table->string('Soluong');
            $table->string('Dongia');
            $table->timestamps();
            $table->primary(array('MaPN', 'MaNV'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhaps');
    }
}
