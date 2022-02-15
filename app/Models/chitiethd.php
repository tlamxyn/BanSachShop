<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiethd extends Model
{
    public $table = "chitiethd";

    use HasFactory;
    protected $fillable = [
        'MaHD',
        'MaSP',
        'Soluong',
        'Dongia',
    ];
    public function hoadon()
    {
        return $this->belongsTo(hoadon::class,'MaHD', 'MaHD');
    }
    public function sach()
    {
        return $this->belongsTo(sach::class, 'MaSP', 'MaSP');
    }
}
