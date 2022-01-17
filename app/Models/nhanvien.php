<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaNV',
        'Taikhoan',
        'MatKhau',
        'DiaChi',
        'Sodienthoai',
        'Email',
        'Avatar',
        'ChucVu',
    ];
}
