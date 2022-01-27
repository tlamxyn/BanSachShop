<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phieunhap extends Model
{
    public $table = "phieunhap";

    use HasFactory;
    protected $fillable = [
        'MaPN',
        'MaNV',
        'MaNCC',
        'Dongia',
    ];
    public function chitietphieunhap()
    {
        return $this->hasMany(chitietphieunhap::class, 'MaPN', 'MaPN');
    }
    public function nhanvien()
    {
        return $this->belongsTo(nhanvien::class, 'MaNV', 'MaNV');
    }
}
