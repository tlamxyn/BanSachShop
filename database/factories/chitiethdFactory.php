<?php

namespace Database\Factories;

use App\Models\chitiethd;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\hoadon;
use \App\Models\sach;

class chitiethdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\chitiethd::class;

    public function definition()
    {
        $mahds = hoadon::all()->pluck('MaHD')->toArray();
        $masps = sach::all()->pluck('MaSP')->toArray();
        $mahd = (int)$this->faker->randomElement($mahds);
        $mahds_trongchitiet = chitiethd::all()->pluck('MaHD')->toArray();
        foreach ($mahds as $value) {
            if (array_search($value, $mahds_trongchitiet) == false) {
                $mahd = $value;
                break;
            }
        }
        $masp = $this->faker->randomElement($masps);

        return [
            'MaHD' => $mahd,
            'MaSP' => $masp,
            'Soluong' => $this->faker->numberBetween(1, 10),
            'Dongia' => $this->faker->numberBetween(10000, 1000000),
        ];
    }
}
