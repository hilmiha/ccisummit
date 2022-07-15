@extends('layout.main')

@section('isi_halaman')
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    
    
    <div class="container part-summit" style="min-height: 100vh;">
        @include('bayar_tiket.part.form')
    </div>


    {{-- footer --}}
    @include('layout.footer')
    
@endsection