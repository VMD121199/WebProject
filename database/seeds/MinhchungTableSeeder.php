<?php

use Illuminate\Database\Seeder;

class MinhchungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minhchungs')->insert([
        	['tenminhchung'=>'Sứ mạng và mục tiêu của trường đại học', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-12 00:00:00', 'sohieu' => '1','tieuchi_id' => '1', 'tieuchuan_id'=> '1', 'cap_id' => '1', 'noidung' => 'Sứ mạng của trường đại học được xác định phù hợp với chức năng, nhiệm vụ, các nguồn lực và định hướng phát triển của nhà trường; phù hợp và gắn kết với chiến lược phát triển kinh tế - xã hội của địa phương và cả nước.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Sứ mạng và mục tiêu của trường đại học', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-04 00:00:00', 'sohieu' => '2','tieuchi_id' => '2', 'tieuchuan_id'=> '1', 'cap_id' => '1', 'noidung' => 'Mục tiêu của trường đại học được xác định phù hợp với mục tiêu đào tạo trình độ đại học quy định tại Luật Giáo dục và sứ mạng đã tuyên bố của nhà trường; được định kỳ rà soát, bổ sung, điều chỉnh và được triển khai thực hiện.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-10-23 00:00:00', 'sohieu' => '3','tieuchi_id' => '1', 'tieuchuan_id'=> '2', 'cap_id' => '1', 'noidung' => 'Cơ cấu tổ chức của trường đại học được thực hiện theo quy định của Điều lệ trường đại học và được cụ thể hoá trong quy chế về tổ chức và hoạt động của nhà trường.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-12-02 00:00:00', 'sohieu' => '4','tieuchi_id' => '2', 'tieuchuan_id'=> '2', 'cap_id' => '2', 'noidung' => 'Có hệ thống văn bản để tổ chức, quản lý một cách có hiệu quả các hoạt động của nhà trường.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Tổ chức và quản lý', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-11-30 00:00:00', 'sohieu' => '5','tieuchi_id' => '3', 'tieuchuan_id'=> '2', 'cap_id' => '1', 'noidung' => 'Chức năng, trách nhiệm và quyền hạn của các bộ phận, cán bộ quản lý, giảng viên và nhân viên được phân định rõ ràng','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Chương trình giáo dục', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-10-29 00:00:00', 'sohieu' => '6','tieuchi_id' => '2', 'tieuchuan_id'=> '3', 'cap_id' => '2', 'noidung' => 'Chương trình giáo dục có mục tiêu rõ ràng, cụ thể, cấu trúc hợp lý, được thiết kế một cách hệ thống, đáp ứng yêu cầu về chuẩn kiến thức, kỹ năng của đào tạo trình độ đại học và đáp ứng linh hoạt nhu cầu nhân lực của thị trường lao động.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Chương trình giáo dục', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-10-29 00:00:00', 'sohieu' => '7','tieuchi_id' => '3', 'tieuchuan_id'=> '3', 'cap_id' => '2', 'noidung' => 'Chương trình giáo dục chính quy và giáo dục thường xuyên được thiết kế theo quy định, đảm bảo chất lượng đào tạo','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Chương trình giáo dục', 'noibanhanh'=>'ĐH KHXH & NV', 'ngaybanhanh' => '2020-10-29 00:00:00', 'sohieu' => '8','tieuchi_id' => '4', 'tieuchuan_id'=> '3', 'cap_id' => '2', 'noidung' => 'Chương trình giáo dục được định kỳ bổ sung, điều chỉnh dựa trên cơ sở tham khảo các chương trình tiên tiến quốc tế','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Chương trình giáo dục', 'noibanhanh'=>'ĐH KHXH & NV', 'ngaybanhanh' => '2019-12-10 00:00:00', 'sohieu' => '9','tieuchi_id' => '6', 'tieuchuan_id'=> '3', 'cap_id' => '2', 'noidung' => 'Chương trình giáo dục được thiết kế theo hướng đảm bảo liên thông với các trình độ đào tạo và chương trình giáo dục khác.','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        	['tenminhchung'=>'Hoạt động đào tạo', 'noibanhanh'=>'ĐH KHTN', 'ngaybanhanh' => '2020-08-07 00:00:00', 'sohieu' => '10','tieuchi_id' => '1', 'tieuchuan_id'=> '4', 'cap_id' => '2', 'noidung' => 'Đa dạng hoá các hình thức đào tạo, đáp ứng yêu cầu học tập của người học theo quy định','file' => 'danh-muc-ma-minh-chung-danh-gia.doc'],

        ]);
    }
}
