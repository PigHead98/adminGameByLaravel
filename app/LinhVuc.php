<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    protected $table = 'linhvuc';
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
                'ten_linh_vuc' => $data['ten_linh_vuc'],
                'xoa'          => 1,
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
