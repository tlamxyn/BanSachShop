<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class khachhang extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $table = "khachhang";

    use HasFactory;
    protected $fillable = [
        'Taikhoan',
        'password',
        'DiaChi',
        'Sodienthoai',
        'Email',
        'Avatar',
    ];
    protected $primarykey = 'id';
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hoadon()
    {
        return $this->hasMany(hoadon::class, 'MaKH', 'MaKH');
    }
}
