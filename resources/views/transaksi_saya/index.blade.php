@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    {{-- Tiket Saya List --}}
    <div class="container part-summit" style="min-height: 100vh;">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 border rounded my-5 px-5">
                <div class="row my-5">
                    <div class="col-12">
                        <h3>Transaksi Saya</h3>
                        <span class="subtx-summit">Berikut transaksi pembelian tiket event yang kamu miliki</span>
                    </div>
                </div>

                @include('transaksi_saya.part.list')
                {{-- @include('transaksi_saya.part.empty') --}}

            </div>
        </div>
    </div>


    {{-- footer --}}
    @include('layout.footer')
    
@endsection