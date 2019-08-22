<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    protected $table = "ghe";
    protected $primaryKey = "SoGhe";
    protected $fillable = [
        "MaPhong",
        "loaiGhe",
        "hangGhe",
        "created_at",
        "updated_at"
    ];

    public const  THUONG = 1;
    public  const VIP = 2;
    public static $_loaiGhe = [
        self::THUONG =>"THUONG",
        self::VIP =>"VIP",
    ];

}
