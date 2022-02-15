<?php

namespace Database\Seeders;

use App\Models\theloai;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class theloaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danhsach_theloai = [
            ['Ten' => 'Tiểu thuyết', 'Mota' => 'Một thể loại văn xuôi được viết theo chủ đề xác định'],
            ['Ten' => 'Tự truyện', 'Mota' => 'Những tác phẩm văn học thuộc thể loại tự sự, thường được viết bằng văn xuôi trong đó tác giả tự kể lại và miêu tả cuộc đời mình trong tác phẩm'],
            ['Ten' => 'Light novel', 'Mota' => 'Một dòng tiểu thuyết có nguồn gốc từ Nhật Bản'],
        ];
        theloai::insert($danhsach_theloai);
    }
}
