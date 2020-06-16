<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YeuCau extends Model
{
    protected  $table = 'yeucau';
    public $timestamps = false;

    public function LoaiYeuCau() {
        return $this->hasOne('App\LoaiYeuCau', 'loaiyeucau_id', 'loaiyeucau_id');
    }

    public function HinhThucYeuCau() {
        return $this->hasOne('App\HinhThucYeuCau', 'hinhthuc_id', 'hinhthuc_id');
    }
}
