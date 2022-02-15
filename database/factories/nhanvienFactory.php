<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class nhanvienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\nhanvien::class;

    public function definition()
    {
        $name = $this->faker->lastName . ' ' . $this->faker->lastName . ' ' . $this->faker->firstName();
        return [
            'TaiKhoan' => $name,
            'Matkhau' => $this->faker->bothify('??##??#'),
            'Diachi' => $this->faker->address(),
            'sodienthoai' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'avatar' => $this->faker->word(),
            'MaCV' => $this->faker->numberBetween(1, \App\Models\chucvu::count()),
        ];
    }
}
