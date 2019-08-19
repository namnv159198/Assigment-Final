<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSuatChieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suat_chieu', function (Blueprint $table) {
            $table->bigIncrements('id_suat_chieu');
            $table->unsignedBigInteger("id_rap");
            $table->unsignedBigInteger("id_phim");
            $table->unsignedBigInteger("id_khung_gio");
            $table->unsignedBigInteger("id_phong_chieu");
            $table->unsignedInteger("gia_ve");
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
        Schema::dropIfExists('suat_chieu');
    }
}
