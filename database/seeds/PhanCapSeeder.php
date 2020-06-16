<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PhanCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phancap')->insert(
            [
                'chucvu' => 'Quản lý'
            ]);
        DB::table('phancap')->insert(
            [
                'chucvu' => 'Nhân viên'
            ]
        );
    }
}
