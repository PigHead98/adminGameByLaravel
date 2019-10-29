<?php

namespace App\Http\Controllers;

use App\CauHoi;
use App\LinhVuc;
use Illuminate\Http\Request;

class CauHoiController extends Controller
{
    public function index(CauHoi $question, LinhVuc $cat)
    {
        $data    = $question->findAllUser();
        $linhvuc = $cat->findAllUser();

        return view('questions.tat-ca',
            [
                'data'    => $data,
                'linhvuc' => $linhvuc,
            ]
        );
    }

    public function capnhatCauHoi(Request $request, CauHoi $question, LinhVuc $cat)
    {

        $data                = [];
        $linhvuc_of_question = [];
        $linhvuc             = $cat->findAllUser();
        if (!empty($request->id)) {
            $data                = $question->findUserbyId($request->id);
            $linhvuc_of_question = $cat->findUserbyId($data['linh_vuc_id']);
        }

        return view('questions.cap-nhat',
            [
                'data'                => $data,
                'linhvuc'             => $linhvuc,
                'linhvuc_of_question' => $linhvuc_of_question,
            ]
        );
    }

    public function del(Request $request, CauHoi $question)
    {
        if (!empty($request->id)) {
            $question->delUser($request->id);
        }

        return redirect(route('tatcacauhoi'));
    }

    public function check(Request $request, CauHoi $question)
    {
        $data = $request->all();//dd($data);
        $question->updateInfo($data);

        return redirect(route('tatcacauhoi'));
    }
}
