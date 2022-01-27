<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class sachFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\sach::class;

    public function definition()
    {
        $name = $this->faker->lastName() . ' ' . $this->faker->firstName();
        return [
            'Ten' => $this->faker->word(),
            'Giaban' => $this->faker->numberBetween(50000, 5000000),
            'SLtonkho' => strval($this->faker->numberBetween(0, 1000)),
            'Hinhanh' => $this->faker->word(),
            'Mota' => $this->faker->sentence(),
            'TacGia' => $name,
            'NxB'=>$this->faker->company(),
            'Theloai' => $this->faker->numberBetween(1, \App\Models\theloai::count()),
            'Trangthai' => (string)$this->faker->numberBetween(0,3),
        ];
    }
}
