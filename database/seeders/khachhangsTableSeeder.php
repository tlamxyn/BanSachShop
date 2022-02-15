<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\khachhang;

class khachhangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\khachhang::factory()->count(10)->create();
    }
}
