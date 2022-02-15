<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chucvu extends Model
{
    public $table = "chucvu";

    use HasFactory;
    protected $fillable = [
        'MaCV',
        'Ten',
        'Mota',
    ];
    public function nhanvien()
    {
        return $this->hasMany(nhanvien::class, 'MaCV', 'MaCV');
    }
}
