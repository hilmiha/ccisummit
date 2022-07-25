<?php

namespace App\Http\Controllers\PublicPages;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailEventController extends Controller
{
    public function index(Event $event){
        if ($event->kode_status>0) {
            return view('event_detail.index', [
                'title' => $event->nama_event.' | CCI Summit 2022',
                'event' => $event
            ]);
        }else{
            return redirect('/beranda');
        }
        
    }
}
