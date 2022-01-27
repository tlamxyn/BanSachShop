<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class hoadonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\hoadon::class;

    public function definition()
    {
        $ten = $this->faker->lastName() . ' ' . $this->faker->firstName();
        return [
            'MaKH' => $this->faker->numberBetween(1, \App\Models\khachhang::count()),
            'TongTien' => $this->faker->numberBetween(10000,5000000),
            'Trangthai' => true,
            'Giamgia' => $this->faker->numberBetween(0, 90),
            'TenKH' => $ten,
            'Diachigiaohang' => $this->faker->address(),
            'Phuongthucthanhtoan' =>$this->faker->word(),
            'Sodienthoai' =>$this->faker->phoneNumber(),
            'MaNV'=> $this->faker->numberBetween(1, \App\Models\nhanvien::count()),
        ];
    }
}
