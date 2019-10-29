<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichSuMuaCredit extends Model
{
    protected $table = 'lichsumuacredit';

    public function nguoichoi()
    {
        return $this->hasMany('App\NguoiChoi');
    }

    public function goicredit()
    {
        return $this->hasMany('App\GoiCredit');
    }
}
