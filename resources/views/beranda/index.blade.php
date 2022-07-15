@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    {{-- welcome --}}
    <div class="container part-summit">
        @include('beranda.part.welcome')
    </div>

    {{-- six events --}}
    <div class="container part-summit">
        @include('beranda.part.events')
    </div>

    {{-- benefits --}}
    <div class="container part-summit">
        @include('beranda.part.benefits')
    </div>

    {{-- review --}}
    <div class="container part-summit">
        @include('beranda.part.reviews')
    </div>

    {{-- about cci --}}
    <div class="container part-summit">
        @include('beranda.part.aboutcci')
    </div>

    {{-- partners --}}
    <div class="container part-summit">
        @include('beranda.part.partners')
    </div>

    {{-- footer --}}
    @include('layout.footer')
    
@endsection