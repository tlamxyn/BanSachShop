<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class nhanviensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\nhanvien::factory()->count(10)->create();
    }
}
