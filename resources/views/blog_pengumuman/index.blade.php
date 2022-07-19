@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    
    <div class="container part-summit" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 mt-5">
                {{-- Categorie --}}
                {{-- @include('blog_pengumuman.part.categorie') --}}

                {{-- posts --}}
                @include('blog_pengumuman.part.posts')

                {{-- pagination --}}
                @include('blog_pengumuman.part.pagination')

            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 bg-foter-tiket">
        @include('event_detail.part.footer_tiket')
    </div>

    {{-- footer --}}
    @include('layout.footer')
    
@endsection