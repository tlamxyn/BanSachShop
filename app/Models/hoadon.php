<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaHD',
        'MaKH',
        'Tongtien',
        'Trangthai',
        'GiamGia',
        'TenKH',
        'Diachigiaohang',
        'Phuongthucthanhtoan',
        'Sodienthoai',
        'Ngaylap',
        'MaNV',
    ];
}
