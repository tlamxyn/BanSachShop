<?php

namespace Database\Seeders;

use App\Models\nhacungcap;
use Illuminate\Database\Seeder;

class nhacungcapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $danhsach_ncc = [
            ['TenNcc' => 'Kim Đồng', 'Mota' => 'Nhà xuất bản VN'],
            ['TenNcc' => 'Oxford', 'Mota' => 'Nhà xuất bản Đại học Oxford (Oxford University Press, viết tắt OUP) là một trong những nhà xuất bản đại học lớn nhất trên Thế giới.'],
            ['TenNcc' => 'Penguin Random House', 'Mota' => 'Là một công ty được thành lập bởi sự hợp nhất của các nhà xuất bản cuốn sách Random House, (thuộc sở hữu của Bertelsmann), và Penguin Group (thuộc sở hữu của Pearson PLC). Penguin Random House sử dụng hơn 10.000 người trên toàn cầu trên khắp năm châu'],
        ];
        nhacungcap::insert($danhsach_ncc);
    }
}
