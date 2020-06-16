<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HinhThucYeuCauSeeder::class,
            LoaiYeuCauSeeder::class,
            PhanCapSeeder::class,
            PhongBanSeeder::class,
            ToSeeder::class
        ]);
        DB::table('nhanvien')->insert([
            'hoten' => 'Admin',
            'gioitinh' => 'Nam',
            'sodienthoai' => '0152364897',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phongban_id' => '3',
            'phancap_id' => '1',
            'to' => 'Điều hành',
        ]);
    }
}
