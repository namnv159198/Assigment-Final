<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->bigIncrements('MaVe');
            $table->unsignedBigInteger("MaLichChieu");
            $table->unsignedBigInteger("SoGhe");
            $table->unsignedInteger("gia");
            $table->date("ngayBan");
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
        Schema::dropIfExists('ve');
    }
}
