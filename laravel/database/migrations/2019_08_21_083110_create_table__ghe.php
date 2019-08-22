<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->bigIncrements('SoGhe');
            $table->unsignedBigInteger("MaPhong");
            $table->unsignedInteger("loaiGhe");
            $table->string("hangGhe");
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
        Schema::dropIfExists('Ghe');
    }
}
