<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class chitiethdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\chitiethd::factory()->count(10)->create();
    }
}
