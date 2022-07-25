<div class="d-flex flex-column justify-content-between bg-event-page rounded-4 p-3 p-lg-4 p-xl-5" style="background-image: url('{{ asset('/image'.$event->event_imgbg) }}');">
    <div class="row">
        <div class="d-flex">
            <a href="/beranda" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
    </div>

    <img src="{{ asset('image/techweek/summit_event_techweek_sm.png') }}" class="img-fluid mb-4 img-event-page" alt="">

    <div class="row justify-content-between align-items-end mt-4">
        <div class="col-12 col-md-5">
            <div class="mb-5">
                <h1 class="tx-cciblue"><b>{{ $event->nama_event }}<span class="text-primary"><br>{{ date('Y', strtotime($event->tanggal ))}}</span></b></h1>
                <span>By {{ $event->penyelenggara }}</span>
            </div>
            <div>
                <span><b>{{ date('F d', strtotime($event->tanggal ))}}</b></span>
                <p>{{ $event->lokasi }}</p>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <p class="mb-5">{{ $event->deskripsi_singkat }}</p>
            <div class="row justify-content-between">
                <div class="col-12 col-xl-8">
                    <p><b>Harga: </b> <span class="text-primary"><b>{{ number_format($event->harga,0,",",".") }} /tiket</b></span></p>
                </div>
                <div class="col-12 col-xl-4 d-flex justify-content-start justify-content-xl-end  ">
                    <p class="subtx-summit"><b>No Refund</b></p>
                </div>
            </div>
            <a href="/pesan/techweek2022" class="btn btn-primary w-100"><b>Pesan Tiket</b></a>
        </div>
    </div>
</div>