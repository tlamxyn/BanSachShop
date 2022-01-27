<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietphieunhap extends Model
{
    public $table = "chitietphieunhap";

    use HasFactory;
    protected $fillable = [
        'MaPN',
        'MaSP',
        'Soluong',
        'Dongia',
    ];
}
