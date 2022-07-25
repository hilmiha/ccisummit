<div class="row justify-content-start align-items-center p-3 p-sm-0">
    <h2 class="tx-summit mb-4"><b>Speaker</b></h2>
    <div class="row justify-content-between">
        <div class="col-12 col-md-5 d-flex flex-column flex-sm-row justify-content-start align-items-center mb-5 mb-md-0">
            <img src="{{ asset('image/'.$event->speaker1_img) }}" class="ppl-profile-img mb-4 mb-sm-0" style="max-width: 40%" alt="">
            <div class="ms-0 ms-sm-5 text-center text-sm-start">
                <h4><b>{{ $event->speaker1_name }}</b></h4>
                <span>{{ $event->speaker1_desc }}</span>
            </div>
        </div>
        <div class="col-12 col-md-5 d-flex flex-column flex-sm-row justify-content-start align-items-center mb-5 mb-md-0">
            <img src="{{ asset('image/'.$event->speaker2_img) }}" class="ppl-profile-img mb-4 mb-sm-0" style="max-width: 40%" alt="">
            <div class="ms-0 ms-sm-5 text-center text-sm-start">
                <h4><b>{{ $event->speaker2_name }}</b></h4>
                <span>{{ $event->speaker2_desc }}</span>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-between align-items-start p-3 p-sm-0 mt-5">
    <h2 class="tx-summit mb-4"><b>Deskripsi</b></h2>

    <div class="col-12 col-lg-7">
        <div class="mb-5">
            <p>{{ $event->deskripsi_lengkap }}</p>
        </div>

        <div class="mb-5">
            <p class="subtx-summit"><b>Yang Akan Kamu Dapatkan</b></p>
            <div class="row">
                @if ($event->get_tak)
                    <div class="col-2 d-flex flex-column justify-content-center align-items-center border rounded-3 p-3 m-2" style="min-width: 128px;">
                        <img src="{{ asset('image/web-asset/icon_tak.png') }}" class=""alt="">
                        <span class="mt-3">TAK</span>
                    </div>
                @endif
                @if ($event->get_ecert)
                    <div class="col-2 d-flex flex-column justify-content-center align-items-center border rounded-3 p-3 m-2" style="min-width: 128px;">
                        <img src="{{ asset('image/web-asset/icon_certificate.png') }}" class=""alt="">
                        <span class="mt-3">E-Certificate</span>
                    </div>
                @endif
                @if ($event->get_modul)
                    <div class="col-2 d-flex flex-column justify-content-center align-items-center border rounded-3 p-3 m-2 my-2" style="min-width: 128px;">
                        <img src="{{ asset('image/web-asset/icon_ebook.png') }}" class=""alt="">
                        <span class="mt-3">Modul E-Book</span>
                    </div>
                @endif
                @if ($event->get_snacks)
                    <div class="col-2 d-flex flex-column justify-content-center align-items-center border rounded-3 p-3 m-2 my-2" style="min-width: 128px;">
                        <img src="{{ asset('image/web-asset/icon_snack.png') }}" class=""alt="">
                        <span class="mt-3">Snacks</span>
                    </div>
                @endif
                
                
                
                
            </div>
        </div>

        <div class="mb-5 mb-lg-0">
            <p class="subtx-summit"><b>Yang Perlu Kamu Siapkan</b></p>
            <div class="row">
                @if ($event->req_laptop == true)
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <img src="{{ asset('image/web-asset/icon_laptop.png') }}" class=""alt="">
                            <span class="ms-4">Laptop</span>
                        </div>
                    </div>
                @endif
                
                @if ($event->req_ticket == true)
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <img src="{{ asset('image/web-asset/icon_ticket.png') }}" class=""alt="">
                            <span class="ms-4">Barcode tiket acara</span>
                        </div>
                    </div>
                @endif
                @if ($event->req_ktm == true)
                    <div class="col-12 col-sm-6">
                        <div class="d-flex justify-content-start align-items-center mb-4">
                            <img src="{{ asset('image/web-asset/icon_idcard.png') }}" class=""alt="">
                            <span class="ms-4">Kartu Tanda Mahasiswa (KTM)</span>
                        </div>
                    </div>
                @endif
                
                
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-5 ps-lg-5">
        <div class="mb-5">
            <p class="subtx-summit"><b>Lokasi</b></p>
            <div>
                {{-- <img src="{{ asset('image/web-asset/map_paceholder.png') }}" class="img-fluid"alt=""> --}}
                <iframe src="{{ $event->gmap_link }}" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div>
            <p class="subtx-summit"><b>Open Gate</b></p>
            <p>{{ date('l, d F Y', strtotime($event->tanggal ))}}  |  {{ date('H.i', strtotime($event->opengate_start ))}} - {{ date('H.i', strtotime($event->opengate_close ))}} WIB</p>
        </div>
    </div>
</div>

<div class="row justify-content-between p-3 p-sm-0 mt-5">
    <div class="col-12 col-lg-7">
        <h2 class="tx-summit mb-4"><b>Memiliki pertanyaan?</b></h2>
        <p class="mb-5">Kunjungi halaman FAQ kami atau hubungi kami melalui kontak-kontak berikut ini:</p>
        <div class="row">
            <div class="col-12 col-sm-6  mb-3">
                <img src="{{ asset('image/web-asset/icon_contact_whatsapp.png') }}" width="32" height="32" class=""alt="">
                <span>{{ $event->wa_1 }}</span>
            </div>
            <div class="col-12 col-sm-6 mb-3">
                <img src="{{ asset('image/web-asset/icon_contact_whatsapp.png') }}" width="32" height="32" class=""alt="">
                <span>{{ $event->wa_2 }}</span>
            </div>
            <div class="col-12 col-sm-6 mb-3  ">
                <img src="{{ asset('image/web-asset/icon_contact_line.png') }}" width="32" height="32" class=""alt="">
                <span>{{ $event->line }}</span>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-5 ps-lg-5 mt-5 mt-lg-0">
        <h2 class="tx-summit mb-4"><b>Bagi dengan temanmu</b></h2>

        <!-- AddToAny BEGIN -->
        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
            <a class="a2a_button_facebook me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_facebook.png') }}" width="32" height="32" class=""alt=""></a>
            <a class="a2a_button_twitter me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_twitter.png') }}" width="32" height="32" class=""alt=""></a>
            <a class="a2a_button_line me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_line.png') }}" width="32" height="32" class=""alt=""></a>
            <a class="a2a_button_whatsapp me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_whatsapp.png') }}" width="32" height="32" class=""alt=""></a>
            <a class="a2a_button_telegram me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_telegram.png') }}" width="32" height="32" class=""alt=""></a>
            <a class="a2a_button_linkedin me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_linkedin.png') }}" width="32" height="32" class=""alt=""></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
    </div>
</div>