<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HinhThucYeuCauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinhthucyeucau')->insert([
            'hinhthuc' => 'Điện thoại'
        ]);
        DB::table('hinhthucyeucau')->insert([
            'hinhthuc' => 'Email'
        ]);
        DB::table('hinhthucyeucau')->insert([
            'hinhthuc' => 'Chat'
        ]);

    }
}
