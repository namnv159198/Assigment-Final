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
        Schema::create('suatchieu', function (Blueprint $table) {
            $table->bigIncrements('MaSuatChieu');
            $table->time("thoiGianBatDau");
            $table->time("thoiGianKetThuc");
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
        Schema::dropIfExists('SuatChieu');
    }
}
