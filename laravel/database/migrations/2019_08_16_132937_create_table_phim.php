<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->bigIncrements('MaPhim');
            $table->string("tenPhim");
            $table->string("dienVien");
            $table->string("daoDien");
            $table->unsignedInteger("theLoaiPhim");
            $table->unsignedInteger("thoiLuong");
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
        Schema::dropIfExists('phim');
    }
}
