<?php

namespace App\Models;

use App\Models\UserRole;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    

    // mengubah field cek auth laravel dari 'password' ke 'sandi'
    public function getAuthPassword() {
        return $this->sandi;
    }

    public $incrementing = false; 

    protected $fillable = [
        'id',
        'nama',
        'nim',
        'nohp',
        'email',
        'sandi',
        'kode_role'
    ];

    public function UserRole()
    {
        return $this->belongsTo(UserRole::class,'id_role');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
