<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Faker\Factory as Faker;

class AdminsTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$faker = Faker::create();

    Admin::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('12345678'),
    ]);
    
}
}