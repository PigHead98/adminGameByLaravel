<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CauHoi extends Model
{
    protected $table = 'cauhoi';
    //    protected $fillable = ['ten_dang_nhap','mat_khau','email','hinh_dai_dien','diem_cao_nhat','credit','xoa'];
    protected $guarded = ['id'];

    public function findUserbyId($id)
    {
        return self::find($id);
    }

    public function findAllUser()
    {
        return self::all()->where('xoa',1 );
    }

    public function updateInfo($data)
    {

        $flight = self::updateOrCreate(
            [
                'id' => $data['id'],
            ],
            [
                'noi_dung'    => $data['noi_dung'],
                'linh_vuc_id' => $data['linh_vuc_id'],
                'phuong_an_a' => $data['phuong_an_a'],
                'phuong_an_b' => $data['phuong_an_b'],
                'phuong_an_c' => $data['phuong_an_c'],
                'phuong_an_d' => $data['phuong_an_d'],
                'dap_an'      => $data['dap_an'],
                'xoa'         => 1,
            ]
        );
    }

    public function delUser($id)
    {
        $user      = $this->findUserbyId($id);
        $user->xoa = '2';
        $user->save();
    }
}
