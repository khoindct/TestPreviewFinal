<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class PhongBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phongban')->insert(
            [
                'tenphongban' => 'bảo vệ',
                'chucnang' => 'Tổ chức công tác bảo vệ cơ quan, giữ vững trật tự trị an, ngăn ngừa kẻ gian xâm nhập, giữ gìn tài sản tập thể và cá nhân trong trường. Tổ chức phối hợp cùng với chính quyền địa phương thực hiện các biện pháp nhằm ngăn chặn và phát hiện kịp thời các hành vi phạm pháp, tệ nạn xã hội xảy ra trong khu vực trường. Phối hợp cùng các đơn vị khác trong trường nhắc nhở mọi người đến trường thực hiện các quy định nhằm giữ vững kỷ cương nề nếp. Đề xuất các biện pháp, giải pháp nhằm đảm bảo trật tự trị an kỷ cương trường lớp.'
            ]
        );
        DB::table('phongban')->insert(
            [
                'tenphongban' => 'quản lý',
                'chucnang' => 'Quản lý tiến trình thực hiện nhiệm vụ của từng bộ phận, đảm bảo quy trình thực hiện đúng với quy định đã đề ra.'
            ]
        );
    }
}
