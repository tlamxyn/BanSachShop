<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    public $table = "hoadon";

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
    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'MaKH', 'MaKH');
    }
    public function chitiethd()
    {
        return $this->hasMany(chitiethd::class, 'MaHD', 'MaHD');
    }
}
