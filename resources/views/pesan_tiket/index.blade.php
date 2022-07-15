@extends('layout.main')

@section('isi_halaman')
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    
    <div class="container part-summit" style="min-height: 100vh;">
        <div class="row p-3 p-sm-0 mb-0 mb-sm-4">
            <a href="/event/techweek2022" class="text-decoration-none mt-5 mb-5"><h6><i class="bi bi-arrow-left"></i> Kembali</h6></a>
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