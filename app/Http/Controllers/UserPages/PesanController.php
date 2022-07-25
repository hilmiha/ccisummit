<?php

namespace App\Http\Controllers\UserPages;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesanController extends Controller
{
    public function index(Event $event){
        if ($event->kode_status==2) {
            return view('pesan_tiket.index', [
                'title' => $event->nama_event.' | CCI Summit 2022',
                'event' => $event,
                'onstep' => 'pesan'
            ]);
        }else{
            return redirect('/event/'.$event->slug);
        }
        
    }
}
