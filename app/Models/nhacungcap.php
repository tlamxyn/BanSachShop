<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
    public $table = "nhacungcap";

    use HasFactory;
    protected $fillable = [
        'TenNcc',
        'mota',
    ];
}
