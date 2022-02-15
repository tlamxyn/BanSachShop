<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class NhanVien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhanvien')->insert([
            [
                'MaNV'=> 1,
                'TaiKhoan'=> 'nhanvien01',
                'password' => Hash::make('12345678'),
                'email' => 'truong02@gmail.com',
                'Diachi' => 'Nguyễn Hoài Chương',
                'avatar' => 'Gò vấp',
                'MaCV' => '1',
                'sodienthoai' => '12345',
            ],

            // [
            //     'id' => 'NV202201252',
            //     'username' => 'layer02',
            //     'password' => Hash::make('4214232524232'),
            //     'email' => 'tuannghia@gmail.com',
            //     'fullName' => 'Huỳnh Tấn Nghĩa',
            //     'address' => 'Quận 6',
            //     'type' => 'NV kiểm kho',
            //     'phone' => '0123456789',
            //     'salary' =>10000000,
            //      'avatar' => 'avatar2.png',
            //     'status' => 1,
            // ],
            // [
            //     'id' => 'NV202201253',
            //     'username' => 'layer03',
            //     'password' => Hash::make('4531231246'),
            //     'email' => 'vantuan@gmail.com',
            //     'fullName' => 'Hồ Văn Tuân',
            //     'address' => 'Quận 5',
            //     'type' => 'NV thanh toán',
            //     'phone' => '0123456789',
            //     'salary' =>10000000,
            //      'avatar' => 'avatar3.png',
            //     'status' => 1,
            // ],
           
        ]);
    }
}
