<?php

namespace Database\Factories;

use App\Models\chitiethd;
use App\Models\chitietphieunhap;
use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\phieunhap;
use \App\Models\sach;

class chitietphieunhapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\chitietphieunhap::class;

    public function definition()
    {
        $mapns = phieunhap::all()->pluck('MaPN')->toArray();
        $masps = sach::all()->pluck('MaSP')->toArray();


        $mapn = $this->faker->randomElement($mapns);

        if (chitietphieunhap::count() != 0) {
            $masps_chitiet = chitietphieunhap::all()->where('MaPN', '=', $mapn)->pluck('MaSP')->toArray();
            $masp = max($masps_chitiet) + 1;
        }
        else {
            $masp = min($masps);
        }
        return [
            'MaPN' => $mapn,
            'MaSP' => $masp,
            'Soluong' => $this->faker->numberBetween(10, 1000),
            'Dongia' => $this->faker->numberBetween(10000, 5000000),
        ];
    }
}
