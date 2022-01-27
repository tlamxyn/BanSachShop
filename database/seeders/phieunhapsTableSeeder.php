<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class phieunhapsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\phieunhap::factory()->count(1)->create();
    }
}
