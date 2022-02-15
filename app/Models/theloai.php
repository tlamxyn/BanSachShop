<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table ='theloai';

    use HasFactory;
    protected $fillable = [
        'Ten',
        'Mota',
    ];
    public function sach()
    {
        return $this->hasMany(sach::class, 'MaTL','Theloai');
    }
}
