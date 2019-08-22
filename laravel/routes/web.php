<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Route::get("/Hello-world","DemoController@helloWorld");
//Route::get("/say-Hello","DemoController@sayHello");
Route::get("/quan-ly-ghe","DemoController@listGhe");
Route::get("/quan-ly-phong-chieu","DemoController@listPhongChieu");
Route::get("/quan-ly-phim","DemoController@listPhim");
Route::get("/quan-ly-lich-chieu","DemoController@listLichChieu");
Route::get("/quan-ly-ve","DemoController@listVe");
Route::get("/quan-ly-suat-chieu","DemoController@listSuatChieu");
