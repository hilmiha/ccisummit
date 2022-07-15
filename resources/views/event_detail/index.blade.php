@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    {{-- Page --}}
    <div class="d-flex flex-column justify-content-between" style="min-height: 100vh">
        <div>
            {{-- banner event --}}
            <div class="container part-summit">
                @include('event_detail.part.banner_event')
            </div>

            {{-- detail event--}}
            <div class="container part-summit">
                @include('event_detail.part.detail_event')
            </div>
        </div>

        {{-- footer beli tiket --}}
        <div class="container-fluid mt-5 bg-foter-tiket">
            @include('event_detail.part.footer_tiket')
        </div>
    </div>

    
    


    {{-- footer --}}
    @include('layout.footer')
    
@endsection