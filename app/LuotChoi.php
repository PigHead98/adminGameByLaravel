<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuotChoi extends Model
{
    protected $table = 'luotchoi';
    //    protected $fillable = ['ten_dang_nhap','mat_khau','email','hinh_dai_dien','diem_cao_nhat','credit','xoa'];
    protected $guarded = ['id'];

    public function nguoichoi()
    {
        return $this->hasMany('App\NguoiChoi');
    }

    public function chitietluotchoi()
    {
        return $this->belongsTo('App\ChiTietLuotChoi');
    }
}
