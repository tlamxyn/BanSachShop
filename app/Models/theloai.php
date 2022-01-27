<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    protected $table ='theloai';

    use HasFactory;
    protected $fillable = [
        'MaTL',
        'Ten',
        'Mota',
    ];
}
