<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitietphieunhap extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaPN',
        'MaSP',
        'Soluong',
        'Dongia',
    ];
}
