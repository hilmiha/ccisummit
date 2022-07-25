<?php

namespace App\Http\Controllers\PublicPages;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index(){
        $highlight_event = Event::highlight();
        if(!$highlight_event->exists()){
            $highlight_event = null;
        }
        $restof_events = Event::restofit($highlight_event);

        return view('beranda.index',[
            'title' => 'Beranda | CCI Summit 2022',
            'highlight_event' => $highlight_event,
            'restof_events' => $restof_events
        ]);
        
    }
}
