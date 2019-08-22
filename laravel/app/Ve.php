<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    protected $table = "ve";
    protected $primaryKey = "MaVe";
    protected $fillable = [
        "MaLichChieu",
        "SoGhe",
        "gia",
        "ngayBan",
        "created_at",
        "updated_at"
    ];
}
