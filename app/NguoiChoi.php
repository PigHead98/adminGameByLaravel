<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiChoi extends Model
{
    protected $table = 'nguoichoi';
//    protected $fillable = ['ten_dang_nhap','mat_khau','email','hinh_dai_dien','diem_cao_nhat','credit','xoa'];
    protected $guarded = ['id'];

    public function findUserbyId($id)
    {
        return self::find($id);
    }

    public function findAllUser()
    {
        return self::all()->where('xoa',1);
    }

    public function updateInfo($data)
    {

        $flight = self::updateOrCreate(
            [
                'id' => $data['id'],
            ],
            [
                'ten_dang_nhap' => $data['ten_dang_nhap'],
                'mat_khau'      => $data['mat_khau'],
                'email'         => $data['email'],
                'hinh_dai_dien' => $data['hinh_dai_dien'],
                'diem_cao_nhat' => $data['diem_cao_nhat'],
                'credit'        => $data['credit'],
                'xoa'           => 1,
            ]
        );
    }

    public function delUser($id)
    {
        $user = $this->findUserbyId($id);
        $user->xoa = '2';
        $user->save();
    }

    public function luotChoi()
    {
        return $this->belongsToMany('App\LuotChoi');
    }

    public function lichsumuacredit()
    {
        return $this->belongsToMany('App\LichSuMuaCredit');
    }
}
