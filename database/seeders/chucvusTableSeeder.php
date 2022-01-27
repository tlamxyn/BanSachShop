<?php

namespace Database\Seeders;

use App\Models\chucvu;
use Illuminate\Database\Seeder;

class chucvusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danhsach_chucvu = [
            ['Ten' => 'Shipper', 'Mota' => 'Người giao hàng'],
            ['Ten' => 'SmileMan', 'Mota' => 'Người tư vấn khách hàng'],
            ['Ten' => 'Cleaner', 'Mota' => 'Người dọn dẹp lau chùi sách trong kho'],
            ['Ten' => 'Guard', 'Mota' => 'Người bảo vệ kho sách'],
            ['Ten' => 'Fighter', 'Mota' => 'Người chịu bị khách chửi mỗi khi có lỗi xảy ra'],
        ];
        chucvu::insert($danhsach_chucvu);
    }
}
