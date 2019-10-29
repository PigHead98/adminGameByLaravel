<?php

namespace App\Http\Controllers;

use App\GoiCredit;
use App\LichSuMuaCredit;
use Illuminate\Http\Request;

class GoiCreditController extends Controller
{
    public function index (GoiCredit $goiCredit) {
        $data = $goiCredit::all()->where('xoa',1) ;
        return view('credit.tat-ca',
            ['data' => $data]
        );
    }

    public function capnhatGoi (Request $request,GoiCredit $goiCredit) {
        $data = [];
        if (!empty($request->id))
            $data = $goiCredit::find($request->id);
        return view('credit/cap-nhat',
            ['data' => $data]
        );
    }

    public function lichsu (LichSuMuaCredit $lichSuMuaCredit) {
        $data = $lichSuMuaCredit::all()->where('xoa',1);
        return view('credit/lich-su.tat-ca',
            ['data' => $data]
        );
    }

    public function capnhatLichSu (Request $request) {
        $data = 1;
        return view('credit.cap-nhat',
            ['data' => $data]
        );
    }

    public function checkCredit(Request $request, GoiCredit $goiCredit)
    {
        $data = $request->all();//dd($data);
        $goiCredit->updateInfo($data);
        return redirect(route('tatcacredit'));
    }

    public function del(Request $request, GoiCredit $goiCredit)
    {
        $data = $request->all();//dd($data);
        $goiCredit->delUser($request->id);
        return redirect(route('tatcacredit'));
    }
}
