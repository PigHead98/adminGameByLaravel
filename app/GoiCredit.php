<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoiCredit extends Model
{
    protected $table = 'goicredit';
    protected $guarded = ['id'];

    public function updateInfo($data)
    {

        $flight = self::updateOrCreate(
            [
                'id' => $data['id'],
            ],
            [
                'ten_goi' => $data['ten_goi'],
                'credit'  => $data['credit'],
                'so_tien' => $data['so_tien'],
                'xoa'     => 1,
            ]
        );
    }

    public function delUser($id)
    {
        $cre      = self::find($id);
        $cre->xoa = '2';
        $cre->save();
    }
}
