<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class LoaiYeuCauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaiyeucau')->insert([
            'tenyeucau' => 'Hỗ trợ'
        ]);
        DB::table('loaiyeucau')->insert([
            'tenyeucau' => 'Lỗi phát sinh'
        ]);
        DB::table('loaiyeucau')->insert([
            'tenyeucau' => 'Yêu cầu nâng cấp sửa đổi'
        ]);
    }
}
