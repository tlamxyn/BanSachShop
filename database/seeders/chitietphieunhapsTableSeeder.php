<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class chitietphieunhapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\chitietphieunhap::factory()->count(\App\Models\sach::count())->create();
    }
}
