<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class khachhangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\khachhang::class;

    public function definition()
    {
        $name = $this->faker->lastName . ' ' . $this->faker->lastName . ' ' . $this->faker->firstName();
        return [
            'TaiKhoan' => $name,
            'Matkhau' => $this->faker->bothify('??##??#'),
            'Diachi' => $this->faker->address(),
            'Sodienthoai' => $this->faker->phoneNumber(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Avatar' => $this->faker->word(),
        ] ;
    }
}
