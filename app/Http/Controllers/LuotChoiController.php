<?php

namespace App\Http\Controllers;

use App\ChiTietLuotChoi;
use App\LuotChoi;
use Illuminate\Http\Request;

class LuotChoiController extends Controller
{
    public function index (LuotChoi $luotChoi) {
        $data = $luotChoi::all()->where('xoa',1);
//        dd($data);
        return view('luotchoi.tat-ca',
            ['data' => $data]
        );
    }
//
//    public function capnhatchitietluotchoi (Request $request) {
//        $data = 1;
//        return view('luotchoi/chi-tiet.cap-nhat',
//            ['data' => $data]
//        );
//    }

    public function chitiet (ChiTietLuotChoi $chiTietLuotChoi) {
        $data = $chiTietLuotChoi::all()->where('xoa',2);
        return view('luotchoi/chi-tiet.tat-ca',
            ['data' => $data]
        );
    }

//    public function capnhatluotchoi (Request $request) {
//        $data = 1;
//        return view('luotchoi.cap-nhat',
//            ['data' => $data]
//        );
//    }
}
