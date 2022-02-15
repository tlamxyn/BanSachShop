<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    use HasFactory;
    protected $fillable = [
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
    protected $table ='sach';
    public function theloai()
    {
        return $this->belongsTo(theloai::class, 'Theloai', 'MaTL');
    }
}
