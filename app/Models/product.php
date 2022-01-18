<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSP', 
        'Ten',
        'Giaban',
        'SLtonkho',
        'Hinhanh',
        'Mota',
        'TacGia',
        'NXB',
        'Theloai',
        'Trangthai',
    ];
    protected $primarykey = 'MaSP';
    protected $table ='products';
}
