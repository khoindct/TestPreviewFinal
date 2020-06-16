<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class ToSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('to')->insert([
            'phongban_id' => '1',
            'to' => '1',
            'nhiemvu' => 'Thường trực tại cổng chính 24/24 để hướng dẫn khách đến liên hệ công tác, nhắc nhở mọi người chấp hành các quy định khi đến trường.'
        ]);
        DB::table('to')->insert([
                'phongban_id' => '1',
                'to' => '2',
                'nhiemvu' => 'Quản lý chìa khóa các phòng học và giảng đường. Mở và đóng cửa ra vào, cửa phòng học đúng qui định giờ theo yêu cầu phục vụ giảng dạy và học tập.'
            ]);
        DB::table('to')->insert([
                'phongban_id' => '1',
                'to' => '3',
                'nhiemvu' => 'Thường xuyên tuần tra bao quát toàn khu khu vực trong phạm vi quản lý của trường, ngăn chặn người ngoài vào trường khi không có yêu cầu công tác; giám sát, kiểm tra người mang tài sản của trường ra khỏi cơ quan (khi có nghi ngờ).'
            ]);
        DB::table('to')->insert([
            'phongban_id' => '2',
            'to' => 'Kinh doanh, Xuất nhập khẩu',
            'nhiemvu' => 'Đảm bảo đầu vào và đầu ra của Công ty, tiếp cận và nghiên cứu thị trường, giới thiệu sản phẩm và mở rộng thị trường cũng như thu hút khách hàng mới. Tổ chức thực hiện kế hoạch kinh doanh, tính giá và lập hợp đồng với khách hàng.\r\n\r\nCung cấp thông tin, dịch thuật tài liệu, phiên dịch cho ban lãnh đạo. Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban, phân xưởng đảm bảo sản xuất sản phẩm đúng thời hạn hợp đồng với khách hàng và kịp thời đề xuất những phương án sản xuất hiệu quả nhất.\r\n\r\nLập và phân bổ kế hoạch sản xuất kinh doanh hàng năm cho Công ty, hàng quý và hàng tháng cho các phân xưởng sản xuất. Lập lệnh sản xuất cho các phân xưởng, duy trì và nâng cao nguồn hàng cho Công ty. Đề xuất các biện pháp nâng cao hiệu quả công tác Marketing trong từng thời điểm.'
        ]);
        DB::table('to')->insert([
            'phongban_id' => '2',
            'to' => 'Tài chính – Kế toán',
            'nhiemvu' => 'Chịu trách nhiệm toàn bộ thu chi tài chính của Công ty, đảm bảo đầy đủ chi phí cho các hoạt động lương, thưởng, mua máy móc, vật liệu,… và lập phiếu thu chi cho tất cả những chi phí phát sinh. Lưu trữ đầy đủ và chính xác các số liệu về xuất, nhập theo quy định của Công ty.\r\n\r\nChịu trách nhiệm ghi chép, phản ánh chính xác, kịp thời, đầy đủ tình hình hiện có, lập chứng từ về sự vận động của các loại tài sản trong Công ty, thực hiện các chính sách, chế độ theo đúng quy định của Nhà nước. Lập báo cáo kế toán hàng tháng, hàng quý, hàng năm để trình Ban Giám đốc.\r\n\r\nPhối hợp với phòng hành chánh – nhân sự thực hiện trả lương, thưởng cho cán bộ công nhân viên theo đúng chế độ, đúng thời hạn. Theo dõi quá trình chuyển tiền thanh toán của khách hàng qua hệ thống ngân hàng, chịu trách nhiệm quyết toán công nợ với khách hàng. Mở sổ sách, lưu trữ các chứng từ có liên quan đến việc giao nhận..'
        ]);
        DB::table('to')->insert([
            'phongban_id' => '2',
            'to' => 'Hành chính – Nhân sự',
            'nhiemvu' => 'Lập bảng báo cáo hàng tháng về tình hình biến động nhân sự. Chịu trách nhiệm theo dõi, quản lý nhân sự, tổ chức tuyển dụng, bố trí lao động đảm bảo nhân lực cho sản xuất, sa thải nhân viên và đào tạo nhân viên mới. Chịu trách nhiệm soạn thảo và lưu trữ các loại giấy tờ, hồ sơ, văn bản, hợp đồng của Công ty và những thông tin có liên quan đến Công ty. Tiếp nhận và theo dõi các công văn, chỉ thị, quyết định,….\r\n\r\nTổ chức, triển khai, thực hiện nội quy lao động của Công ty, theo dõi quản lý lao động, đề xuất khen thưởng. Thực hiện các quy định nhằm đảm bảo quyền lợi và nghĩa vụ đối với người lao động như lương, thưởng, trợ cấp, phúc lợi,….\r\n\r\nPhối hợp với phòng kế toán thực hiện về công tác thanh toán tiền lương, tiền thưởng và các mặt chế độ, chính sách cho người lao động, và đóng bảo hiểm xã hội thành phố theo đúng quy định của Nhà nước và của Công ty.'
        ]);
    }
}
