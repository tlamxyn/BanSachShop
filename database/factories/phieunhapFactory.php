<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class phieunhapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\phieunhap::class;

    public function definition()
    {
        return [
            'MaNV' => $this->faker->numberBetween(1, \App\Models\nhanvien::count()),
            'MaNCC' => $this->faker->numberBetween(1, \App\Models\nhacungcap::count()),
            'Tongtien' => $this->faker->numberBetween(10000000, 100000000),
        ];
    }
}
