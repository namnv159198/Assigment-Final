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
            $table->bigIncrements('id_phim');
            $table->string("ten_phim");
            $table->date("nph");
            $table->string("the_loai");
            $table->string("mac_phim");
            $table->string("dien_vien");
            $table->string("dao_dien");
            $table->string("thoi_luong");
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
