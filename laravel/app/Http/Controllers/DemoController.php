<?php

namespace App\Http\Controllers;

use App\Ghe;
use App\LichChieu;
use App\Phim;
use App\PhongChieu;
use App\Student;
use App\SuatChieu;
use App\Ve;
use Illuminate\Http\Request;

class DemoController extends Controller
{

    public function listGhe(){
        $ghes = Ghe::paginate(20);
        return view("Project.listGhe",compact("ghes"));
    }
    public function listPhongChieu(){
        $phongchieus = PhongChieu::paginate(20);
        return view("Project.listPhongChieu",compact("phongchieus"));
    }
    public function listPhim(){
        $phims = Phim::paginate(20);
        return view("Project.listPhim",compact("phims"));
    }
    public function listSuatChieu(){
        $suatchieus = SuatChieu::paginate(20);
        return view("Project.listSuatChieu",compact("suatchieus"));
    }
    public function listVe(){
        $ves = Ve::paginate(20);
        return view("Project.listVe",compact("ves"));
    }
    public function listLichChieu(){
        $lichchieus = LichChieu::paginate(20);
        return view("Project.listLichChieu",compact("lichchieus"));
    }
}
