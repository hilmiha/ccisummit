<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    public $incrementing = false; 

    protected $fillable = [
        'id',
        'nama_role'
    ];

    public function User()
    {
        return $this->hasMany(User::class);
    }
}
