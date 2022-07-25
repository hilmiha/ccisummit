<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    use HasFactory;

    public $incrementing = false; 

    protected $guarded = [
        'id'
    ];

    public function Event()
    {
        return $this->hasMany(Event::class);
    }
}