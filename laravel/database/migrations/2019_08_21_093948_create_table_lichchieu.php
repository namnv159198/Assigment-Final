<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLichchieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichchieu', function (Blueprint $table) {
            $table->bigIncrements('MaLichChieu');
            $table->date("ngayChieu");
            $table->unsignedBigInteger("MaSuatChieu");
            $table->unsignedBigInteger("MaPhim");
            $table->unsignedInteger("theLoaiChieu");
            $table->unsignedInteger("cheDoChieu");
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
        Schema::dropIfExists('lichchieu');
    }
}
