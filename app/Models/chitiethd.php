<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethd extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaHD',
        'MaSP',
        'Soluong',
        'Dongia',
    ];
}
