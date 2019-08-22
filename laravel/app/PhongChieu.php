<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongChieu extends Model
{
    protected $table = "phongchieu";
    protected $primaryKey = "MaPhong";
    protected $fillable = [
        "ten_phong",
        "SoLuongGhe",
        "created_at",
        "updated_at"
    ];
}
