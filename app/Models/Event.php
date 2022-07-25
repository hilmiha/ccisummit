<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $incrementing = false; 

    protected $guarded = [
        'id'
    ];

    public function EventStatus()
    {
        return $this->belongsTo(EventStatus::class,'id_role');
    }

    public function scopeHighlight($query){
        return $query->where('kode_status', '>', 0)->where('tanggal', '>=', date("Y-m-d"))->orderBy('tanggal', 'DESC')->first();
    }

    public function scopeRestofit($query, $highlight_event){
        if ($highlight_event == null) {
            return  $query->orderBy('created_at', 'DESC')->get();
        }else{
            return  $query->whereNot('id', $highlight_event->id)->orderBy('created_at', 'DESC')->get();
        }
            
            
    }
    
}
