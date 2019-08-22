<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableLichchieu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lichchieu', function (Blueprint $table) {
            $table->foreign("MaSuatChieu")->references("MaSuatChieu")->on("suatchieu");
            $table->foreign("MaPhim")->references("MaPhim")->on("phim");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lichchieu', function (Blueprint $table) {
            $table->dropForeign(["MaSuatChieu"]);
            $table->dropForeign(["MaPhim"]);
        });
    }
}
