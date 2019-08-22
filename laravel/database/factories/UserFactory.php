<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Ghe;
use App\LichChieu;
use App\PhongChieu;
use App\Phim;
use App\SuatChieu;
use App\Ve;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(\App\PhongChieu::class, function (Faker $faker) {

    return [
        "ten_phong" => "H".$faker->unique()->randomFloat(0,1,10),
        "SoLuongGhe"=>random_int(30,40),
    ];
});
$factory->define(\App\Ghe::class, function (Faker $faker) {

    return [
        "MaPhong"=> $faker->randomFloat(0,1,10),
        "loaiGhe"=>$faker->randomFloat(0,1,2),
        "hangGhe"=> Str::random(1).$faker->randomFloat(0,1,50),
    ];
});


$factory->define(\App\Phim::class, function (Faker $faker) {
    return [
        "theLoaiPhim" => $faker->randomFloat(0,1,10),
        "tenPhim" => $faker->unique()->company,
        "dienVien"=> $faker->name,
        "daoDien"=> $faker->name,
        "thoiLuong"=> random_int(80,150),
    ];
});
$factory->define(\App\SuatChieu::class, function (Faker $faker) {
    return [
        "thoiGianBatDau" => $faker->time(),
        "thoiGianKetThuc" =>$faker->time(),

    ];
});
$factory->define(\App\LichChieu::class, function (Faker $faker) {
    return [
        "ngayChieu" => $faker->date(),
        "MaSuatChieu" => $faker->randomFloat(0,1,100),
        "MaPhim"=>$faker->randomFloat(0,1,100),
        "theLoaiChieu"=> $faker->randomFloat(0,1,4),
        "cheDoChieu"=> $faker->randomFloat(0,1,2),
    ];
});
$factory->define(\App\Ve::class, function (Faker $faker) {
    return [
        "ngayBan" => $faker->date(),
        "MaLichChieu" => $faker->randomFloat(0,1,100),
        "SoGhe"=> $faker->randomFloat(0,1,500),
        "gia" => $faker->randomFloat(0,50,200),
    ];
});


