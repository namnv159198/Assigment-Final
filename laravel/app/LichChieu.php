<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichChieu extends Model
{
    protected $table = "lichchieu";
    protected $primaryKey = "MaLichChieu";
    protected $fillable = [
        "ngayChieu",
        "MaSuatChieu",
        "MaPhim",
        "theLoaiSuatChieu",
        "cheDoChieu",
        "created_at",
        "updated_at"
    ];
    public const PHUDE1 = 1;
    public const PHUDE2 = 2;
    public const LONGTIENG1 = 3;
    public const LONGTIENG2 = 4;
    public static $_theLoaiSuatChieu = [
        self::PHUDE1 => "2D - PHU DE",
        self::PHUDE2 => "3D - PHU DE",
        self::LONGTIENG1 => "2D - LONG TIENG",
        self::LONGTIENG2 => "3D - LONG TIENG",
        ];
    public const cheDoChieu1 = 1;
    public const cheDoChieu2 = 2;
    public static $_cheDoChieu = [
        self::cheDoChieu1 =>"DANG CHIEU",
        self::cheDoChieu2 =>"SAP CHIEU",
    ];
}
