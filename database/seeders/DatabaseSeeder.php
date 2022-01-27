<?php

namespace Database\Seeders;

use App\Models\chitiethd;
use App\Models\chitietphieunhap;
use App\Models\chucvu;
use App\Models\nhanvien;
use App\Models\theloai;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminsTableSeeder::class,
            khachhangsTableSeeder::class,
            nhacungcapsTableSeeder::class,
            theloaisTableSeeder::class,
            chucvusTableSeeder::class,
            sachsTableSeeder::class,
            nhanviensTableSeeder::class,
            hoadonsTableSeeder::class,
            phieunhapsTableSeeder::class,
            chitiethdsTableSeeder::class,
            chitietphieunhapsTableSeeder::class
        ]);
    }
}
