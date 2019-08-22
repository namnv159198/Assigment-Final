<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableGhe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ghe', function (Blueprint $table) {
            $table->foreign("MaPhong")->references("MaPhong")->on("phongchieu");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ghe', function (Blueprint $table) {
            $table->dropForeign(["MaPhong"]);
        });
    }
}
