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


    public function khachhang()
    {
        return $this->belongsTo(Khachhang::class, 'MaNV', 'MaKH');
    }

    //Trong view chúng ta có thể sử dụng @foreach cho chitiethd như sau
    /*
    <thead>
        <tr>
            <td>Mã hóa đơn</td>
            <td>Mã sản phẩm</td>
            <td>Số lượng</td>
            <td>Đơn giá</td>
        </tr>
    </thead>
    <tbody>
        @foreach($hoadon->chitiethd as $cthd)
        <tr>
            <td>{{$cthd->MaHD}}</td>
            <td>{{$cthd->MaHD}}</td>
            <td>{{$cthd->Soluong}}</td>
            <td>{{$cthd->Dongia}}</td>
        </tr>
        @endforeach
    </tbody>
    */
    //Trong đó "$hoadon->chitiethd" của "@foreach($hoadon->chitiethd as $cthd)" là function bên dưới
    public function chitiethd()
    {
        return $this->hasMany(chitiethd::class, 'MaHD', 'MaHD');
    }
}
