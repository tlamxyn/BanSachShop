<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class nhanvien extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;
    protected $fillable = [
        'MaNV',
        'Taikhoan',
        'password',
        'DiaChi',
        'Sodienthoai',
        'Email',
        'Avatar',
        'MaCV',
    ];
    protected $primarykey = 'id';
    protected $table ='nhanvien';
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
    public function chucvu()
    {
        return $this->belongsTo(chucvu::class, 'MaCV', 'MaCV');
    }
}
