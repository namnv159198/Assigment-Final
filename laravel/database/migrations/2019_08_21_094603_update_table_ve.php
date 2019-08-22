<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableVe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ve', function (Blueprint $table) {
            $table->foreign("MaLichChieu")->references("MaLichChieu")->on("lichchieu");
            $table->foreign("SoGhe")->references("SoGhe")->on("ghe");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ve', function (Blueprint $table) {
            $table->dropForeign(["MaLichChieu"]);
            $table->dropForeign(["SoGhe"]);
        });
    }
}
