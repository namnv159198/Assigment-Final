<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePhongchieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongchieu', function (Blueprint $table) {
            $table->bigIncrements('MaPhong');
            $table->string("ten_phong");
            $table->unsignedInteger("SoLuongGhe");
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
        Schema::dropIfExists('phongchieu');
    }
}
