<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $table = "phim";
    protected $primaryKey = "MaPhim";
    protected $fillable = [
        "tenPhim",
        "dienVien",
        "daoDien",
        "theLoaiPhim",
        "thoiLuong",
        "created_at",
        "updated_at"
    ];
    public const HANH_DONG = 1;
    public const KINH_DI = 2;
    public const HOAT_HINH = 3;
    public const TINH_CAM_LANG_MANG = 4;
    public const TRINH_THAM = 5;
    public const VIEN_TUONG= 6;
    public const PHIM_TAI_LIEU = 7;
    public const TAM_LY_XA_HOI = 8;
    public const HAI_KICH = 9;
    public const PHUU_LUU = 10;
    public static $_theLoaiPhim = [
        self::HANH_DONG => "HÀNH ĐỘNG",
        self::KINH_DI => "KINH DỊ",
        self::HOAT_HINH => "HOẠT HÌNH",
        self::TINH_CAM_LANG_MANG => "TÌNH CẢM LÃNG MẠNG",
        self::TRINH_THAM => "TRINH THÁM",
        self::VIEN_TUONG => "KHOA HỌC VIỄN TƯỞNG",
        self::PHIM_TAI_LIEU => "PHIM TÀI LIỆU",
        self::TAM_LY_XA_HOI => "TÂM LÝ XÃ HỘI",
        self::HAI_KICH => "HÀI KỊCH",
        self::PHUU_LUU => "PHƯU LƯU MẠO HIỂM",
    ];
}
