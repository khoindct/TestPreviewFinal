<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class To extends Model
{
    protected $table = 'to';
    public $timestamps = false;

    public function PhongBan() {
        return $this->belongsTo('App\PhongBan', 'phongban_id', 'phongban_id');
    }
}
