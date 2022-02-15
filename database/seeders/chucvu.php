<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class chucvu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chucvu')->insert([
            [
                'MACV'=> '1',
                'Ten'=> 'layer01',
                'Mota' => 'Nguyễn Hoài Chương',        
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
