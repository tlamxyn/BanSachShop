<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    public $table = "khachhang";

    use HasFactory;
    protected $fillable = [
        'Taikhoan',
        'MatKhau',
        'DiaChi',
        'Sodienthoai',
        'Email',
        'Avatar',
    ];
}
