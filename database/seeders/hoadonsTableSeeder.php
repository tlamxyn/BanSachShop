<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class hoadonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\hoadon::factory()->count(10)->create();
    }
}
