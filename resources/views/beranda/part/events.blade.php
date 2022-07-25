<div class="d-flex flex-column justify-content-center align-items-center">

    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="tx-summit mb-3"><b>The Six Summit Of CCI</b></h2>
            <p>Mulai ambil langkah dalam 6 buah hari event yang dipersembahkan oleh CCI Telkom University</p>
        </div>
    </div>
    
    <div class="row justify-content-center" style="max-width: 90%">
        @if (!$highlight_event == null)
            {{-- selling --}}
            <div class="col-12 col-lg-4 p-2">
                <div class="d-flex flex-column flex-md-row flex-lg-column justify-content-between p-3 h-100 border rounded-3">
                    
                    <div class="col-md-6 col-lg-12 pe-md-2 pe-lg-0">
                        <img src="{{ asset('image/techweek/summit_event_techweek_sm.png') }}" class="img-fluid mb-4" alt="">
                        <h5 class="tx-summit"><b>{{ $highlight_event->nama_event }}</b></h5>
                        <p class="subtx-summit mb-5">By {{ $highlight_event->penyelenggara }}</p>
                        
                        
                    </div>
                    <div class="col-md-6 col-lg-12 ps-md-2 ps-lg-0 d-flex flex-column ">
                        <p class="text-secondary"><b>{{ date('F d, Y', strtotime($highlight_event->tanggal)) }}</b></p>
                        <P>{{ $highlight_event->deskripsi_singkat }}</P>
                        <p><b>Harga</b></p>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-primary"><b>Rp {{ number_format($highlight_event->harga,0,",",".") }} /tiket</b></span>
                            <span class="subtx-summit text-end">No Refund</span>
                        </div>

                        @if ($highlight_event->kode_status == 0)
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        @elseif($highlight_event->kode_status == 1)
                            <a href="/event/{{ $highlight_event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        @elseif($highlight_event->kode_status == 2) 
                            <a href="/event/{{ $highlight_event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                            <a href="/pesan/{{ $highlight_event->slug }}" class="btn btn-primary"><b>Pesan Tiket</b></a>
                        @elseif($highlight_event->kode_status == 3) 
                            <a href="/event/{{ $highlight_event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                            <a href="/pesan/{{ $highlight_event->slug }}" class="btn btn-primary disabled"><b>Tiket Habis</b></a>
                        @endif
                    </div>
                </div>
            </div>
        @endif
        

        {{-- coming soon --}}
        <div class="col-12 col-lg-8 d-none d-sm-block">
            <div class="row ">
                @foreach ($restof_events as $event)
                    <div class="col-6 col-lg-4 align-self-stretch p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image'.$event->event_imgtitle) }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>{{ $event->nama_event }}</b></h5>
                                <p class="subtx-summit mb-5">By {{ $event->penyelenggara }}</p>
                            </div>
                            @if ($event->kode_status == 0)
                                <p class="text-secondary"><b>Coming Soon</b></p>
                            @elseif($event->kode_status == 1)
                                <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                <p class="text-secondary"><b>Coming Soon</b></p>
                            @elseif($event->kode_status == 2) 
                                <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                <a href="/pesan/{{ $event->slug }}" class="btn btn-primary"><b>Pesan Tiket</b></a>
                            @elseif($event->kode_status == 3) 
                                <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                <a href="/pesan/{{ $event->slug }}" class="btn btn-primary disabled"><b>Tiket Habis</b></a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- when small --}}
        <div class="col-12 d-block d-sm-none">
            <div class="horizontal-group">
                <div class="row">
                    @foreach ($restof_events as $event)
                        <div class="col-10 horizontal-item p-2">
                            <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                                <div>
                                    <img src="{{ asset('image'.$event->event_imgtitle) }}" class="img-fluid mb-4" alt="">
                                    <h5 class="tx-summit"><b>{{ $event->nama_event }}</b></h5>
                                    <p class="subtx-summit mb-5">By {{ $event->penyelenggara }}</p>
                                </div>
                                @if ($event->kode_status == 0)
                                    <p class="text-secondary"><b>Coming Soon</b></p>
                                @elseif($event->kode_status == 1)
                                    <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                    <p class="text-secondary"><b>Coming Soon</b></p>
                                @elseif($event->kode_status == 2) 
                                    <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                    <a href="/pesan/{{ $event->slug }}" class="btn btn-primary"><b>Pesan Tiket</b></a>
                                @elseif($event->kode_status == 3) 
                                    <a href="/event/{{ $event->slug }}" class="btn btn-outline-primary mb-3"><b>Lihat Detail</b></a>
                                    <a href="/pesan/{{ $event->slug }}" class="btn btn-primary disabled"><b>Tiket Habis</b></a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-10 horizontal-item p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image/uiuxdesign/summit_event_uiux_sm.png') }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>UI/UX Design </b></h5>
                                <p class="subtx-summit mb-5">By CCI Desing  Division</p>
                            </div>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        </div>
                    </div>
                    <div class="col-10 horizontal-item p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image/netconf/summit_event_netconf_sm.png') }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>Net. Conf</b></h5>
                                <p class="subtx-summit mb-5">By CCI Network Division</p>
                            </div>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        </div>
                    </div>
                    <div class="col-10 horizontal-item p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image/datadebunked/summit_event_datadebunk_sm.png') }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>Data Debunked Day </b></h5>
                                <p class="subtx-summit mb-5">By CCI Data Science Division</p>
                            </div>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        </div>
                    </div>
                    <div class="col-10 horizontal-item p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image/modernjournalism/summit_event_journalistalk_sm.png') }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>Let's Talk With Modern Journalism</b></h5>
                                <p class="subtx-summit mb-5">By Student CCI</p>
                            </div>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        </div>
                    </div>
                    <div class="col-10 horizontal-item p-2">
                        <div class="d-flex flex-column border rounded-3 justify-content-between p-3 h-100 bg-white">
                            <div>
                                <img src="{{ asset('image/cciroyale/summit_event_cciroyale_sm.png') }}" class="img-fluid mb-4" alt="">
                                <h5 class="tx-summit"><b>CCI Royale</b></h5>
                                <p class="subtx-summit mb-5">By CCI Games & Gadgets Division</p>
                            </div>
                            <p class="text-secondary"><b>Coming Soon</b></p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        {{-- decoration --}}
        <div class=" d-none d-md-block bg-wrapper">
            <div class="bg-img" style="bottom: 0px; right: 0;">
                <img src="{{ asset('image/web-asset/beranda_decor_boxes_1.png') }}" alt="">
            </div>
        </div>

    </div>
    <hr class="w-75 mt-5 devider" >
</div>
