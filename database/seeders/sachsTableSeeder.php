<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class sachsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\sach::factory()->count(20)->create();
    }
}
