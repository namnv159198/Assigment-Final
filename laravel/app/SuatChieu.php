<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuatChieu extends Model
{

    protected $table = "suatchieu";
    protected $primaryKey = "MaSuatChieu";
    protected $fillable = [
        "thoiGianBatDau",
        "thoiGianKetThuc",
        "created_at",
        "updated_at"
    ];
}
