<?php

namespace App\Http\Controllers;

use App\LinhVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinhVucController extends Controller
{
    public function index(LinhVuc $question)
    {
        $data = $question->findAllUser();
        //dd($data);
        return view('categories.tat-ca',
            ['data' => $data]
        );
    }

    public function capnhatLinhVuc(Request $request, LinhVuc $question)
    {
        $data = [];
        if (!empty($request->id))
            $data = $question->findUserbyId($request->id);
        return view('categories.cap-nhat',
            ['data' => $data]
        );
    }

    public function del(Request $request, LinhVuc $question)
    {//query builder
        if (!empty($request->id))
        {
            $question->delUser($request->id);
            DB::table('cauhoi')
                ->where('linh_vuc_id','=',$request->id)
                ->update(['xoa' => 2]);
        }

        return redirect(route('tatcalinhvuc'));
    }

    public function check(Request $request, LinhVuc $question)
    {
        $data = $request->all();//dd($data);
        $question->updateInfo($data);
        return redirect(route('tatcalinhvuc'));
    }
}
