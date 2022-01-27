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
    protected $primarykey = 'id';
    protected $table ='sach';
    public function theloai()
    {
        return $this->hasMany(chitiethd::class, 'Theloai', 'matl');
    }
}
