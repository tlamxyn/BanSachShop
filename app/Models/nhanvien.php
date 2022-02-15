<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    public $table = "nhanvien";

    use HasFactory;
    protected $fillable = [
        'MaNV',
        'Taikhoan',
        'MatKhau',
        'DiaChi',
        'Sodienthoai',
        'Email',
        'Avatar',
        'MaCV',
    ];
    public function chucvu()
    {
        return $this->belongsTo(chucvu::class, 'MaCV', 'MaCV');
    }
}
