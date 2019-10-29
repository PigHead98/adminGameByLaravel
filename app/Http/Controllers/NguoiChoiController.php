<?php

namespace App\Http\Controllers;

use App\NguoiChoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NguoiChoiController extends Controller
{
    public function index(NguoiChoi $user)
    {
        $data    = $user->findAllUser();

        return view('users.tat-ca',
            [
                'data'    => $data,
            ]
        );
    }

    public function capnhatNguoiChoi(Request $request, NguoiChoi $user)
    {
        $data = [];
        if (!empty($request->id))
            $data = $user->findUserbyId($request->id);

        return view('users.cap-nhat',
            ['data' => $data]
        );
    }

    public function del(Request $request, NguoiChoi $user)
    {
        if (!empty($request->id))
            $user->delUser($request->id);

        return redirect(route('tatcanguoichoi'));
    }

    public function check(Request $request, NguoiChoi $user)
    {
        $data = $request->all();//dd($data);
        $user->updateInfo($data);

        return redirect(route('tatcanguoichoi'));
    }
}
