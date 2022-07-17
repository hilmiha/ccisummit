@extends('layout.main')

@section('isi_halaman')
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    
    <div class="container part-summit" style="min-height: 100vh;">
        <div class="row mt-5 mb-5">
            <div class="d-flex">
                <a href="/event/techweek2022" class="text-decoration-none"><i class="bi bi-arrow-left"></i> Kembali</a>
            </div>
        </div>
        

        
        @include('pesan_tiket.part.onstep')

        @if ($onstep == 'pesan')
            @include('pesan_tiket.part.form')
        @elseif(str_contains($onstep, 'pembayaran_') or $onstep == 'selesai')
            @include('pesan_tiket.part.bayar')
        @endif

        
    </div>


    {{-- footer --}}
    @include('layout.footer')
    
@endsection