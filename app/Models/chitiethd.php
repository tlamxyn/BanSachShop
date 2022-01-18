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
    public function hoadon()
    {
        return $this->belongsTo(hoadon::class,'MaHD', 'MaHD');
    }
    public function product()
    {
        return $this->belongsTo(product::class, 'MaSP', 'MaSP');
    }
}
